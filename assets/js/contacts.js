ymaps.ready(function () {
  const map = new ymaps.Map('map', {
    center: [50.623498, 36.560956],
    zoom: 15
  });

  const placemark = new ymaps.Placemark(
    [50.623498, 36.560956],
    { balloonContent: 'завод Мир Окон' }
  );

  map.geoObjects.add(placemark);
});

