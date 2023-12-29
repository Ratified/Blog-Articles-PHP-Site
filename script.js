const blogs = document.querySelector('.blogs')

function fetchBlogs(){
    fetch('./includes/blogs.php')
    .then((res) => res.json())
    .then((data) => {
        let output = ''
        data.forEach(blog => {
            let { id, title, created_at, description } = blog
            blogs.innerHTML = ''
            output+= `
                <div class="blog">
                    <h2>${title}</h2>
                    <p class="date">${created_at}</p>
                    <p class="description">${description}</p>
                    <div class="buttons">
                        <a href="read.php?id=${id}" class="btn more">Read More</button>
                        <a href="edit.php?title=${title}" class=btn editBtn"> Edit </a>
                        <a href="./includes/delete.inc.php?id=${id}" class="btn delete">Delete</a>
                    </div>
                </div>
            `
            blogs.innerHTML += output;
        })
    })
}

function refreshPeriodically(){
    setInterval(fetchBlogs, 1000);
}

refreshPeriodically();