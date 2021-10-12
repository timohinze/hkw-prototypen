// Teaser mit Gradient
	const callback = (entries, observer) => {
		entries.forEach((entry) => {
			if(entry.isIntersecting) {
				entry.target.classList.add("add-gradient--visible")
			}
		})
	}
	const options = {
		root: null,
		rootMargin: '0px',
		threshold: 0.4
	}
	const gradientObserver = new IntersectionObserver(callback, options)
	const gradientItems = document.querySelectorAll(".add-gradient")
	gradientItems.forEach(item => {
		gradientObserver.observe(item)
	})
