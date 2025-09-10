// seach trang home
export function setupSearchForm() {
  const form = document.querySelector(".search-form");
  const resultsBox = document.getElementById("search-results");
  const resultList = document.getElementById("result-list");

  if (!form) {
    console.error("Search form not found");
    return;
  }

  form.addEventListener("submit", function (e) {
    e.preventDefault(); // Ngăn form submit reload trang
    
    const location = document.getElementById("location").value;
    const category = document.getElementById("category").value;
    const level = document.getElementById("level").value;

    if (resultList) {
      resultList.innerHTML = "";
    }

    // Dữ liệu mẫu
    const results = [
      {
        title: "Frontend Developer",
        location: "Hà Nội",
        category: "Công nghệ thông tin",
        level: "junior"
      },
      {
        title: "Digital Marketing Manager",
        location: "TP. Hồ Chí Minh",
        category: "Marketing",
        level: "senior"
      },
      {
        title: "Business Analyst",
        location: "Đà Nẵng",
        category: "Tài chính",
        level: "mid"
      },
      {
        title: "UX/UI Designer Intern",
        location: "Hà Nội",
        category: "Công nghệ thông tin",
        level: "intern"
      }
    ];

    // Filter logic cải tiến
    const filtered = results.filter(job => {
      const locationMatch = !location || job.location.includes(location) || location === job.location;
      const categoryMatch = !category || job.category.includes(category) || category === job.category;
      const levelMatch = !level || job.level === level;
      
      return locationMatch && categoryMatch && levelMatch;
    });

    if (resultList) {
      if (filtered.length > 0) {
        filtered.forEach(job => {
          const li = document.createElement("li");
          li.innerHTML = `
            <strong>${job.title}</strong> - ${job.location} 
            <span class="job-meta">(${job.category}, ${job.level})</span>
          `;
          resultList.appendChild(li);
        });
      } else {
        const li = document.createElement("li");
        li.textContent = "Không tìm thấy kết quả phù hợp.";
        li.className = "no-results";
        resultList.appendChild(li);
      }

      if (resultsBox) {
        resultsBox.style.display = "block";
      }
    }
  });
}