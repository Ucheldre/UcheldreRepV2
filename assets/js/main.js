// Prevent default browser scroll to hash on page load
if (window.location.hash) {
	// Prevent the default scroll
	window.scrollTo(0, 0);

	// Delay the smooth scroll slightly to ensure it happens after the browser's attempt
	setTimeout(() => {
		smoothScroll(window.location.hash, 800);
	}, 10);
}

// #currentYear is a placeholder for the current year in the footer
// Get current year in London timezone
const options = { timeZone: 'Europe/London', year: 'numeric' };
const date = new Date().toLocaleString('en-GB', options);
const currentYear = date.split(',')[0];
document.querySelectorAll('.currentYear').forEach(element => {
	element.textContent = currentYear;
});

// Theme Toggler Functionality
// Check for saved theme preference or detect system preference if none saved, then default accordingly
const savedTheme = localStorage.getItem('theme') || (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
document.documentElement.className = savedTheme + '-mode';

// Function to toggle between light and dark themes
function toggleTheme() {
	const currentTheme = document.documentElement.className;
	const newTheme = currentTheme === 'dark-mode' ? 'light' : 'dark';

	document.documentElement.className = newTheme + '-mode';
	localStorage.setItem('theme', newTheme);

	// Update both desktop and mobile toggle button icons
	updateThemeIcons(newTheme);
}

function updateThemeIcons(theme) {
	// Update desktop toggle button icon
	const desktopThemeIcon = document.getElementById('theme-icon');
	if (desktopThemeIcon) {
		desktopThemeIcon.className = theme === 'dark' ? 'fas fa-moon' : 'fas fa-sun';
	}

	// Update mobile toggle button icon
	const mobileThemeIcon = document.getElementById('mobile-theme-icon');
	if (mobileThemeIcon) {
		mobileThemeIcon.className = theme === 'dark' ? 'fas fa-moon' : 'fas fa-sun';
	}
}

// Initialize theme toggle button icons based on current theme
document.addEventListener('DOMContentLoaded', () => {
	updateThemeIcons(savedTheme);
});

// Mobile menu toggle: Close menu when any nav link is clicked
document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
	// Skip the login dropdown element but process its children
	if (link.id === 'loginDropdown') return;

	link.addEventListener('click', function () {
		const navbarCollapse = document.querySelector('.navbar-collapse');
		if (navbarCollapse && navbarCollapse.classList.contains('show')) {
			// Using Bootstrap's collapse API to hide the menu
			const bsCollapse = new bootstrap.Collapse(navbarCollapse);
			bsCollapse.hide();
		}
	});
});

// Fetch and render Hot Servers data
fetch('https://cubex.cc/hotservers.php')
	.then(response => response.json())
	.then(data => {
		const servers = data.servers;
		const sortedServers = Object.values(servers).sort((a, b) => b.attributes.online_players - a.attributes.online_players);
		const topServers = sortedServers.slice(0, 6); // Get top 6 servers
		const serversContainer = document.getElementById("servers-container");

		topServers.forEach(server => {
			const ipAlias = server.attributes.ip_alias || server.attributes.ip;
			const sanitizedName = server.name.replace(/[^a-zA-Z0-9]/g, '');
			const card = document.createElement("div");
			card.className = "col-6 col-md-4"; // Changed to col-6 for mobile (two per row) and col-md-4 for medium screens and up
			card.innerHTML = `
			<div class="server-card">
			  <h3>${server.name}</h3>
			  <p>${ipAlias}:${server.attributes.port}</p>
			  <p>${server.attributes.online_players} / ${server.attributes.max_players} players online</p>
			  <button class="btn" onclick="window.location.href='minecraft:?addExternalServer=${sanitizedName}|${ipAlias}:${server.attributes.port}'">Add to Server List</button>
			</div>
		  `;
			serversContainer.appendChild(card);
		});
	})
	.catch(error => console.error('Error fetching server data:', error));

function smoothScroll(targetSelector, speed) {
	const targetElement = document.querySelector(targetSelector);
	if (targetElement) {
		const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
		const startPosition = window.pageYOffset;
		const distance = targetPosition - startPosition;
		let startTime = null;

		function animation(currentTime) {
			if (startTime === null) startTime = currentTime;
			const timeElapsed = currentTime - startTime;
			const progress = Math.min(timeElapsed / speed, 1);

			const easing = progress * (2 - progress);
			window.scrollTo(0, startPosition + distance * easing);

			if (progress < 1) {
				requestAnimationFrame(animation);
			} else {
				window.location.hash = targetSelector;
			}
		}
		requestAnimationFrame(animation);
	}
}

// Activated by "onClick" in the HTML - making it globally available
window.scrollToClosestSection = function() {
	// Get all section elements
	const sections = document.querySelectorAll('section');
	if (sections.length === 0) return;
	
	// Get current scroll position
	const currentPosition = window.pageYOffset;
	
	// Find the next section
	let nextSection = null;
	for (const section of sections) {
		const sectionTop = section.getBoundingClientRect().top + window.pageYOffset;
		// If section is below current position (adding small buffer)
		if (sectionTop > currentPosition + 10) {
			nextSection = section;
			break;
		}
	}
	
	// If no next section found (user might be at bottom), scroll to first section
	if (!nextSection && sections.length > 0) {
		nextSection = sections[0];
	}
	
	// Scroll to the next section
	if (nextSection) {
		const sectionId = nextSection.id ? `#${nextSection.id}` : null;
		if (sectionId) {
			smoothScroll(sectionId, 800);
		} else {
			// If section has no ID, scroll to its position directly
			const targetPosition = nextSection.getBoundingClientRect().top + window.pageYOffset;
			window.scrollTo({
				top: targetPosition,
				behavior: 'smooth'
			});
		}
	}
};

document.querySelectorAll('#faqAccordion .accordion-button').forEach(button => {
	button.addEventListener('click', function () {
		// Get the target collapse element.
		const targetSelector = button.getAttribute('data-bs-target');
		const targetEl = document.querySelector(targetSelector);

		// If the target is going to be opened (i.e., it’s currently closed),
		// then close any other open accordion.
		if (!targetEl.classList.contains('show')) {
			const openAccordion = document.querySelector('#faqAccordion .accordion-collapse.show');
			if (openAccordion) {
				// Use Bootstrap's collapse API to hide the currently open element.
				const collapseInstance = bootstrap.Collapse.getInstance(openAccordion) || new bootstrap.Collapse(openAccordion);
				collapseInstance.hide();
			}
		}
	});
});