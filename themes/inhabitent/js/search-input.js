(function() {

    let searchIcon = document.getElementById('search-icon-id');

    searchIcon.onclick = function(event) {
        event.preventDefault();
        let searchLabel = document.getElementById('search-label-id');
        if (document.querySelector('.search-input-hide') !== null) {
            searchLabel.classList.remove("search-input-hide");
            searchLabel.classList.add("search-input-show");
        } else {
            searchLabel.classList.remove("search-input-show");
            searchLabel.classList.add("search-input-hide");
        }
    };

})();