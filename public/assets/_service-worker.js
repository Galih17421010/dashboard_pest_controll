var _0x5e02 = ["Sticky-Mobile-PWA-v5431-LTR", "index.html", "install", "skipWaiting", "then", "addAll", "open", "waitUntil", "addEventListener", "fetch", "request", "match", "respondWith", "activate", "claim", "clients"];
var CACHE_NAME = _0x5e02[0];
var REQUIRED_FILES = [_0x5e02[1]];
self[_0x5e02[8]](_0x5e02[2], function (_0x6325x3) {
  _0x6325x3[_0x5e02[7]](
    caches[_0x5e02[6]](CACHE_NAME)
      [_0x5e02[4]](function (_0x6325x4) {
        return _0x6325x4[_0x5e02[5]](REQUIRED_FILES);
      })
      [_0x5e02[4]](function () {
        return self[_0x5e02[3]]();
      })
  );
});
self[_0x5e02[8]](_0x5e02[9], function (_0x6325x3) {
  _0x6325x3[_0x5e02[12]](
    caches[_0x5e02[11]](_0x6325x3[_0x5e02[10]])[_0x5e02[4]](function (_0x6325x5) {
      if (_0x6325x5) {
        return _0x6325x5;
      }
      return fetch(_0x6325x3[_0x5e02[10]]);
    })
  );
});
self[_0x5e02[8]](_0x5e02[13], function (_0x6325x3) {
  _0x6325x3[_0x5e02[7]](self[_0x5e02[15]][_0x5e02[14]]());
});
