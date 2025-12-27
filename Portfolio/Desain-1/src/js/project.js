// src/js/projects.js
fetch("/data/projects.json")
  .then((res) => res.json())
  .then((projects) => {
    const container = document.getElementById("projects-grid");

    projects.forEach((project) => {
      const techBadges = project.tech
        .map((t) => `<span class="badge">${t}</span>`)
        .join("");

      const card = `
        <div class="relative bg-white rounded shadow overflow-hidden hover:shadow-2xl hover:scale-105 transition">
          <div class="h-48 mb-4 rounded relative group overflow-hidden">
            <img
              src="${project.image}"
              alt="${project.title} Screenshot"
              class="object-cover w-full h-full group-hover:scale-110 transition duration-500"
              loading="lazy"
            />
            <div
              class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300"
            >
              <a href="${project.github}" target="_blank"
                class="text-white font-semibold px-4 py-2 border border-white rounded mr-2 hover:bg-white hover:text-black transition">
                GitHub
              </a>
              <a href="${project.demo}" target="_blank"
                class="text-white font-semibold px-4 py-2 border border-white rounded hover:bg-white hover:text-black transition">
                Live Demo
              </a>
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-xl mb-2">${project.title}</h3>
            <p class="text-gray-600 mb-2">${project.description}</p>
            <p class="text-gray-500 text-sm mb-2"><strong>Tahun:</strong> ${project.year}</p>
            <div class="flex gap-2 flex-wrap">${techBadges}</div>
          </div>
        </div>
      `;

      container.innerHTML += card;
    });
  })
  .catch((err) => console.error("Gagal load projects:", err));
