function changeLimit(limit) {
    var url = window.location.href.split('?')[0];
    window.location.href = url + '?page=1&limit=' + limit;
}