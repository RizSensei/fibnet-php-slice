document.getElementById('downloadBtn').addEventListener('click', function() {
    const pdfUrl = 'https://example.com/sample.pdf'; // Replace with the actual URL of your PDF
    const anchor = document.createElement('a'); 
    anchor.href = pdfUrl;
    anchor.download = 'sample.pdf'; // Set the file name for the download
    document.body.appendChild(anchor);
    anchor.click();
    document.body.removeChild(anchor);
  });