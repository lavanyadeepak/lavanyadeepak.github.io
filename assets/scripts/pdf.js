let pdfDoc = null;
let pageNum = 1;
let pageRendering = false;
let pageNumPending = null;
let scale = 1.5;

// These will be initialized when the DOM is ready
let canvas = null;
let ctx = null;
let dialog = null;

function renderPage(num) {
  pageRendering = true;
  
  pdfDoc.getPage(num).then(function(page) {
    const viewport = page.getViewport({ scale: scale });
    canvas.height = viewport.height;
    canvas.width = viewport.width;

    const renderContext = {
      canvasContext: ctx,
      viewport: viewport
    };

    const renderTask = page.render(renderContext);

    renderTask.promise.then(function() {
      pageRendering = false;
      if (pageNumPending !== null) {
        renderPage(pageNumPending);
        pageNumPending = null;
      }
    });
  });

  document.getElementById('page-num').textContent = num;
  updateButtons();
}

function queueRenderPage(num) {
  if (pageRendering) {
    pageNumPending = num;
  } else {
    renderPage(num);
  }
}

function onPrevPage() {
  if (pageNum <= 1) return;
  pageNum--;
  queueRenderPage(pageNum);
}

function onNextPage() {
  if (pageNum >= pdfDoc.numPages) return;
  pageNum++;
  queueRenderPage(pageNum);
}

function onZoomIn() {
  scale += 0.25;
  document.getElementById('zoom-level').textContent = Math.round(scale * 100) + '%';
  queueRenderPage(pageNum);
}

function onZoomOut() {
  if (scale <= 0.5) return;
  scale -= 0.25;
  document.getElementById('zoom-level').textContent = Math.round(scale * 100) + '%';
  queueRenderPage(pageNum);
}

function updateButtons() {
  const prevBtn = document.getElementById('prev-page');
  const nextBtn = document.getElementById('next-page');
  
  if (prevBtn) prevBtn.disabled = pageNum <= 1;
  if (nextBtn) nextBtn.disabled = pageNum >= pdfDoc.numPages;
}

function openPDF(url) {
  // Ensure elements are initialized
  if (!canvas || !dialog) {
      canvas = document.getElementById('pdf-canvas');
      if (canvas) ctx = canvas.getContext('2d');
      dialog = document.getElementById('pdf-dialog');
  }

  // Reset state
  pageNum = 1;
  scale = 1.5;
  const zoomLevel = document.getElementById('zoom-level');
  if (zoomLevel) zoomLevel.textContent = '150%';
  
  // Load PDF
  if (typeof pdfjsLib === 'undefined') {
      alert('PDF Library not loaded.');
      return;
  }

  pdfjsLib.getDocument(url).promise.then(function(pdf) {
    pdfDoc = pdf;
    const pageCount = document.getElementById('page-count');
    if (pageCount) pageCount.textContent = pdf.numPages;
    renderPage(pageNum);
    dialog.showModal();
  }).catch(function(error) {
    console.error('Error loading PDF:', error);
    alert('Error loading PDF. Please try again.');
  });
}

document.addEventListener('DOMContentLoaded', function() {
    // Set worker
    if (typeof pdfjsLib !== 'undefined') {
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';
    }

    // Initialize elements
    canvas = document.getElementById('pdf-canvas');
    if (canvas) ctx = canvas.getContext('2d');
    dialog = document.getElementById('pdf-dialog');

    // Event listeners
    const prevBtn = document.getElementById('prev-page');
    if (prevBtn) prevBtn.addEventListener('click', onPrevPage);
    
    const nextBtn = document.getElementById('next-page');
    if (nextBtn) nextBtn.addEventListener('click', onNextPage);
    
    const zoomInBtn = document.getElementById('zoom-in');
    if (zoomInBtn) zoomInBtn.addEventListener('click', onZoomIn);
    
    const zoomOutBtn = document.getElementById('zoom-out');
    if (zoomOutBtn) zoomOutBtn.addEventListener('click', onZoomOut);

    // Keyboard navigation
    if (dialog) {
        dialog.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') onPrevPage();
            if (e.key === 'ArrowRight') onNextPage();
            if (e.key === 'Escape') dialog.close();
        });
    }
});
