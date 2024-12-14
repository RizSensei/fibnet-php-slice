function downloadPdf(pdfUrl, downloadName = "fibnet-file.pdf") {
  const anchor = document.createElement("a");
  anchor.href = pdfUrl;
  anchor.download = downloadName;
  document.body.appendChild(anchor);
  anchor.click();
  document.body.removeChild(anchor);
}
