const tabs = document.querySelectorAll(".chitiet-body-title span");
const tabscontent = document.querySelectorAll(".tabs-content .same");
tabs.forEach((e, i) => {
    e.addEventListener("click", () => {
        tabs.forEach((e) => {
            e.classList.remove("chitiet-body-active");
        });
        tabscontent.forEach((e) => {
            e.classList.remove("chitiet-active");
        });
        e.classList.add("chitiet-body-active");
        tabscontent[i].classList.add("chitiet-active");
    });
});

const search = document.querySelector(".search_icon");
search.addEventListener("click", () => {
    document
        .querySelector(".header_content-group .search")
        .classList.toggle("active");
});