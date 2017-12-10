/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
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
/******/ 	// identity function for calling harmory imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmory exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		Object.defineProperty(exports, name, {
/******/ 			configurable: false,
/******/ 			enumerable: true,
/******/ 			get: getter
/******/ 		});
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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports) {

eval("$(document).ready(function() {});\n\nwindow.openModal = function(id) {\n  console.warn(\"id\", id);\n  var t = $(id);\n  var elem = $(id);\n\n  t.addClass(\"is-active\");\n  $(\"html\").addClass(\"is-clipped\");\n\n  t.find(\".modal-background\").on(\"click\", function(e) {\n    e.stopPropagation();\n    elem.removeClass(\"is-active\");\n    $(\"html\").removeClass(\"is-clipped\");\n  });\n\n  t.find(\".trigger-close\").on(\"click\", function(e) {\n    e.stopPropagation();\n    elem.removeClass(\"is-active\");\n    $(\"html\").removeClass(\"is-clipped\");\n  });\n};\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMC5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL21haW4uanM/NmU0YiJdLCJzb3VyY2VzQ29udGVudCI6WyIkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHt9KTtcblxud2luZG93Lm9wZW5Nb2RhbCA9IGZ1bmN0aW9uKGlkKSB7XG4gIGNvbnNvbGUud2FybihcImlkXCIsIGlkKTtcbiAgdmFyIHQgPSAkKGlkKTtcbiAgdmFyIGVsZW0gPSAkKGlkKTtcblxuICB0LmFkZENsYXNzKFwiaXMtYWN0aXZlXCIpO1xuICAkKFwiaHRtbFwiKS5hZGRDbGFzcyhcImlzLWNsaXBwZWRcIik7XG5cbiAgdC5maW5kKFwiLm1vZGFsLWJhY2tncm91bmRcIikub24oXCJjbGlja1wiLCBmdW5jdGlvbihlKSB7XG4gICAgZS5zdG9wUHJvcGFnYXRpb24oKTtcbiAgICBlbGVtLnJlbW92ZUNsYXNzKFwiaXMtYWN0aXZlXCIpO1xuICAgICQoXCJodG1sXCIpLnJlbW92ZUNsYXNzKFwiaXMtY2xpcHBlZFwiKTtcbiAgfSk7XG5cbiAgdC5maW5kKFwiLnRyaWdnZXItY2xvc2VcIikub24oXCJjbGlja1wiLCBmdW5jdGlvbihlKSB7XG4gICAgZS5zdG9wUHJvcGFnYXRpb24oKTtcbiAgICBlbGVtLnJlbW92ZUNsYXNzKFwiaXMtYWN0aXZlXCIpO1xuICAgICQoXCJodG1sXCIpLnJlbW92ZUNsYXNzKFwiaXMtY2xpcHBlZFwiKTtcbiAgfSk7XG59O1xuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIHJlc291cmNlcy9hc3NldHMvanMvbWFpbi5qcyJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7Iiwic291cmNlUm9vdCI6IiJ9");

/***/ }
/******/ ]);