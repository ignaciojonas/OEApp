/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 47);
/******/ })
/************************************************************************/
/******/ ({

/***/ 47:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(48);


/***/ }),

/***/ 48:
/***/ (function(module, exports) {

$(document).ready(function () {
      $('#content').summernote({
            placeholder: 'Complete aquí el contenido del objeto de enseñanza',
            height: 300
      });
      $('#goal').summernote({
            placeholder: 'Complete aquí el objetivo del objeto de enseñanza',
            height: 300
      });
      $('#didacticIntentionality').summernote({
            placeholder: 'Complete aquí el enfoque del objeto de enseñanza',
            height: 300
      });
      $('#previousKnowledge').summernote({
            placeholder: 'Complete aquí los conocimientos previos del objeto de enseñanza',
            height: 300
      });
      $('#generalDescription').summernote({
            placeholder: 'Complete aquí la descripción general del objeto de enseñanza',
            height: 300
      });
      $('#teachingArea').summernote({
            placeholder: 'Complete aquí el área de enseñanza del objeto de enseñanza',
            height: 300
      });
      $('#reflection').summernote({
            placeholder: 'Complete aquí las reflexiones sobre el desarrollo de la experiencia en relación con las previsiones realizadas',
            height: 300
      });

      $('#btnCreateTag').click(function () {
            $("#frmTag").submit();
      });

      $("#frmTag").submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                  type: "POST",
                  url: url,
                  data: form.serialize(),
                  success: function success(data) {
                        var tag = JSON.parse(data);
                        $('#tagsModal').modal('hide');
                        $('#Tags').append($('<option>', { value: tag.id, text: tag.name }));
                        form.trigger("reset");
                  }
            });
      });

      $('#btnCreateResource').click(function () {
            $("#frmResource").submit();
      });

      $("#frmResource").submit(function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                  type: "POST",
                  url: url,
                  data: formData,
                  processData: false,
                  contentType: false,
                  success: function success(data) {
                        var resource = JSON.parse(data);
                        $('#resourcesModal').modal('hide');
                        $('#Resources').append($('<option>', { value: resource.id, text: resource.name }));
                        form.trigger("reset");
                  }
            });
      })

      function toggleControls(value){
        if (value == 'Link') {
          $('.link').show();
          $('.file').hide();
        }
        else{
          $('.link').hide();
          $('.file').show();
        }
      }

      toggleControls($('#type')[0].value);

      $('#type').change(function(){
        toggleControls(this.value);
      });

});

/***/ })

/******/ });
