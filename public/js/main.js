function search() {
    const searchTitle = document.querySelector('.header__search-title').value
    const categoryId = document.querySelector('.active').id
    const order = document.querySelector('.categories__order-select').value

    let url = ''

    url =  url + "?searchTitle=" + searchTitle + "&category=" + categoryId + "&order=" + order
    window.location = url
}
$('.header__search-title').change(function() {
    search()
})
$('.categories__item-link').click(function(event) {
    $('.active').removeClass('active')
    $(this).addClass('active')
    event.preventDefault();
    search()
})
$('.categories__order-select').change(function() {
    search()
})


