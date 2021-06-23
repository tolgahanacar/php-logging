console.time("user process");

var request_uri = location.pathname + location.search;

function ScreenResolution() {
  var width = screen.width;
  var height = screen.height;
  var resolution = width + "x" + height;
  return resolution;
}

const browser = (function () {
  const test = function (regexp) {
    return regexp.test(window.navigator.userAgent);
  };
  switch (true) {
    case test(/edg/i):
      return "Microsoft Edge";
    case test(/opr/i) || test(/opera/i):
      return "Opera";
    case test(/chrome/i) && !!window.chrome:
      return "Google Chrome";
    case test(/MSIE/i):
      return "Internet Explorer 10-";
    case test(/trident/i):
      return "Internet Explorer 11";
    case test(/firefox/i):
      return "Mozilla Firefox";
    case test(/safari/i):
      return "Safari";
    default:
      return "Other";
  }
})();

var userObj = {
  ScreenResolution: ScreenResolution(),
  FilePath: request_uri,
  Browser: browser,
};

console.group("User Datas");
console.log(userObj);
console.groupEnd();

console.timeEnd("user process");
