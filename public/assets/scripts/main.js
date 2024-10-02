const triggerTabList = document.querySelectorAll(
	".features .features-points .nav-item"
);
if (triggerTabList.length !== 0) {
	triggerTabList[0].classList.add("active-feature");
	triggerTabList.forEach((triggerEl) => {
		const tabTrigger = triggerEl;
		triggerEl.children[0].addEventListener("click", (event) => {
			console.log(triggerEl.classList.contains("active-feature"), tabTrigger);
			if (!triggerEl.classList.contains("active-feature")) {
				tabTrigger.classList.add("active-feature");
				triggerTabList[0].classList.remove("active-feature");
			}
			triggerTabList[0].children[1].classList.remove("show");
			tabTrigger.children[1].classList.add("show");
			tabTrigger.classList.add("active-feature");
			triggerEl.classList.remove("active-feature");
		});
	});
}

document.addEventListener("DOMContentLoaded", function () {
	var currentPage = window.location.pathname.split("/");
	var currentPageName = currentPage[currentPage.length - 1];
	var navLinks = document.querySelectorAll(".target-nav");

	navLinks.forEach(function (link) {
		if (link.getAttribute("href") === currentPageName) {
			link.classList.add("active");
		} else {
			link.classList.remove("active");
		}
	});
});
