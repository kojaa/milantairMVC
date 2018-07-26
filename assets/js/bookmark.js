function getBookmarks() {
    fetch('http://localhost/milantair/MVC/api/bookmarks')
    .then(result => result.json())
    .then(data => {
        displayBookmarks(data.bookmarks);
    });
}

function addBookmark(auctionId) {
    fetch('http://localhost/milantair/MVC/api/bookmarks/add/' + auctionId)
    .then(result => result.json())
    .then(data => {
        if(data.error === 0) {
            getBookmarks();
        }
    });
}

function clearBookmarks() {
    fetch('http://localhost/milantair/MVC/api/bookmarks/clear')
    .then(result => result.json())
    .then(data => {
        if(data.error === 0) {
            getBookmarks();
        }
    });
}

function displayBookmarks(bookmarks) {
    console.log(bookmarks);
}

addEventListener('load', getBookmarks);