// Note: having length != 4 will mess with layout based on how the site is styled
const bookmarks = [
  {
    title: "Population",
    links: [
      { name: "▶ 1-line", url: "population.html" },
      { name: "▶ 2-line", url: "population.html" },
      { name: "▶ 3-line", url: "population.html" },
      { name: "▶ 4-line", url: "population.html" },
      { name: "▶ 5-line", url: "population.html" },
      { name: "▶ 6-line", url: "population.html" },
      { name: "▶ 7-line", url: "population.html" },
      { name: "▶ 8-line", url: "population.html" },
      { name: "▶ 9-line", url: "population.html" },

    ],
  },
  {
    title: "Locker",
    links: [
      { name: "▶ 1-line", url: "locker.html" },
      { name: "▶ 2-line", url: "locker.html" },
      { name: "▶ 3-line", url: "locker.html" },
      { name: "▶ 4-line", url: "locker.html" },
      { name: "▶ 5-line", url: "locker.html" },
      { name: "▶ 6-line", url: "locker.html" },
      { name: "▶ 7-line", url: "locker.html" },
      { name: "▶ 8-line", url: "locker.html" },
      { name: "▶ 9-line", url: "locker.html" },

    ],
  },
  {
    title: "Elevator ",
    links: [
      { name: "▶ 1-line", url: "elevator.html" },
      { name: "▶ 2-line", url: "elevator.html" },
      { name: "▶ 3-line", url: "elevator.html" },
      { name: "▶ 4-line", url: "elevator.html" },
      { name: "▶ 5-line", url: "elevator.html" },
      { name: "▶ 6-line", url: "elevator.html" },
      { name: "▶ 7-line", url: "elevator.html" },
      { name: "▶ 8-line", url: "elevator.html" },
      { name: "▶ 9-line", url: "elevator.html" },

    ],
  },
  {
    title: "Others",
    links: [
      { name: "▶Click", url: "other.html" },
    ],
  },
];

const input = document.getElementById("search-input");
const searchBtn = document.getElementById("search-btn");

const expand = () => {
  searchBtn.classList.toggle("close");
  input.classList.toggle("square");
};

searchBtn.addEventListener("click", expand);
