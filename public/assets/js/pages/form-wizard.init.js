/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************************!*\
  !*** ./resources/js/pages/form-wizard.init.js ***!
  \************************************************/
$(function () {
  $("#basic-example").steps({
    labels: {
      finish: "Complete"
    },
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slide",
    finish: 'Send',
    enableCancelButton: false,
    onInit: function onInit(event, current) {
      var saveA = $("<a>").attr("href", "#").attr("id", "saveAsDraft").addClass("saveBtn").text("Save As Draft");
      var saveBtn = $("<li>").attr("aria-disabled", false).append(saveA);
      $(document).find(".actions ul").prepend(saveBtn);
    },
    onFinishing: function onFinishing() {
      add(); // window.location.href = "{{ route('show-all-prescription')}}";
    }
  }), $("#vertical-example").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slide",
    stepsOrientation: "vertical"
  });
});
/******/ })()
;