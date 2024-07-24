<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudentPreneur Team Profile</title>
    <link rel="stylesheet" href="styleTeam.css" />
  </head>
  <body>
  <?php include 'header.php'; ?>

    <div class="team-profile-page">
      <div class="latest-projects">
        <h2>Latest Projects</h2>
        <div class="project-cards">
          <div class="project-card">
            <img src="img/event-live1.jpeg" alt="Startup Platform" />
            <h3>Project 1</h3>
            <p>Innovate Hub</p>
            <p>1st project</p>
            <button class="view-button">View</button>
          </div>
          <div class="project-card">
            <img src="img/event-live2.jpeg" alt="NextWave" />
            <h3>Project 2</h3>
            <p>Innovate Hub</p>
            <p>2nd project</p>
            <button class="view-button">View</button>
          </div>
          <div class="project-card">
            <img src="img/event-live3.jpeg" alt="VisionPath" />
            <h3>project 3</h3>
            <p>Innovate Hub</p>
            <p>3rd project</p>
            <button class="view-button">View</button>
          </div>
          <div class="project-card">
            <img src="img/event-live1.jpeg" alt="VisionPath" />
            <h3>project 4</h3>
            <p>Innovate Hub</p>
            <p>4th project</p>
            <button class="view-button">View</button>
          </div>
        </div>
      </div>

      <div class="main-content">
        <div class="left-column">
          <div class="my-tasks">
            <h2>My Tasks</h2>
            <table id="taskTable">
              <thead>
                <tr>
                  <th>Task Name</th>
                  <th>Task Date</th>
                  <th>Task Assignee</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody id="taskList"></tbody>
            </table>
            <button id="addTaskButton">Add Task</button>
          </div>
        </div>

        <div class="right-column">
          <div class="calendar">
            <div class="calendar-header">
              <button id="prevMonth">&lt;</button>
              <span id="currentMonthYear"></span>
              <button id="nextMonth">&gt;</button>
            </div>
            <div class="calendar-body">
              <div class="day-name">Sun</div>
              <div class="day-name">Mon</div>
              <div class="day-name">Tue</div>
              <div class="day-name">Wed</div>
              <div class="day-name">Thu</div>
              <div class="day-name">Fri</div>
              <div class="day-name">Sat</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="task-modal" id="taskModal">
      <div class="task-modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h2>Add New Task</h2>
        <form id="taskForm">
          <label for="taskName">Task Name:</label>
          <input
            type="text"
            id="taskName"
            name="taskName"
            required
          /><br /><br />
          <label for="taskDate">Date:</label>
          <input
            type="date"
            id="taskDate"
            name="taskDate"
            required
          /><br /><br />
          <label for="taskAssignee">Assignee:</label>
          <input
            type="text"
            id="taskAssignee"
            name="taskAssignee"
            required
          /><br /><br />
          <button type="submit" id="saveTaskButton">Save</button>
        </form>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const addTaskButton = document.getElementById("addTaskButton");
        const taskModal = document.getElementById("taskModal");
        const closeModal = document.getElementById("closeModal");
        const taskForm = document.getElementById("taskForm");
        const taskTableBody = document.getElementById("taskList");

        const calendar = document.querySelector(".calendar-body");
        const currentMonthYear = document.getElementById("currentMonthYear");
        const prevMonth = document.getElementById("prevMonth");
        const nextMonth = document.getElementById("nextMonth");

        let date = new Date();
        const monthNames = [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July",
          "August",
          "September",
          "October",
          "November",
          "December",
        ];

        function renderCalendar() {
          const year = date.getFullYear();
          const month = date.getMonth();
          currentMonthYear.textContent = `${monthNames[month]} ${year}`;
          calendar.innerHTML = "";

          const firstDay = new Date(year, month, 1).getDay();
          const lastDate = new Date(year, month + 1, 0).getDate();

          // Day names
          for (let i = 0; i < 7; i++) {
            const dayName = document.createElement("div");
            dayName.className = "day-name";
            dayName.textContent = [
              "Sun",
              "Mon",
              "Tue",
              "Wed",
              "Thu",
              "Fri",
              "Sat",
            ][i];
            calendar.appendChild(dayName);
          }

          // Empty cells before the first day of the month
          for (let i = 0; i < firstDay; i++) {
            const emptyCell = document.createElement("div");
            calendar.appendChild(emptyCell);
          }

          // Days of the month
          for (let i = 1; i <= lastDate; i++) {
            const dayCell = document.createElement("div");
            dayCell.className = "day-cell";
            dayCell.textContent = i;
            dayCell.addEventListener("click", () =>
              alert(`Selected date: ${year}-${month + 1}-${i}`)
            );
            calendar.appendChild(dayCell);
          }
        }

        prevMonth.addEventListener("click", () => {
          date.setMonth(date.getMonth() - 1);
          renderCalendar();
        });

        nextMonth.addEventListener("click", () => {
          date.setMonth(date.getMonth() + 1);
          renderCalendar();
        });

        renderCalendar();

        addTaskButton.addEventListener("click", function () {
          taskModal.style.display = "block";
        });

        closeModal.addEventListener("click", function () {
          taskModal.style.display = "none";
        });

        taskForm.addEventListener("submit", function (event) {
          event.preventDefault();

          const taskName = document.getElementById("taskName").value;
          const taskDate = document.getElementById("taskDate").value;
          const taskAssignee = document.getElementById("taskAssignee").value;

          addTaskToTable(taskName, taskDate, taskAssignee);

          taskModal.style.display = "none";
          taskForm.reset();
        });

        function addTaskToTable(taskName, taskDate, taskAssignee) {
          const taskRow = document.createElement("tr");
          taskRow.innerHTML = `
                  <td>${taskName}</td>
                  <td>${taskDate}</td>
                  <td>${taskAssignee}</td>
                  <td class="task-actions">
                    <button class="editTask">Edit</button>
                    <button class="deleteTask">Delete</button>
                  </td>
                `;
          taskTableBody.appendChild(taskRow);

          const deleteButton = taskRow.querySelector(".deleteTask");
          deleteButton.addEventListener("click", function () {
            taskRow.remove();
          });

          const editButton = taskRow.querySelector(".editTask");
          editButton.addEventListener("click", editTaskHandler);
        }

        function editTaskHandler() {
          const editButton = this;
          const taskRow = editButton.parentElement.parentElement;
          const deleteButton = taskRow.querySelector(".deleteTask");

          if (editButton.textContent === "Edit") {
            const currentTaskName =
              taskRow.querySelector("td:nth-child(1)").innerText;
            const currentTaskDate =
              taskRow.querySelector("td:nth-child(2)").innerText;
            const currentTaskAssignee =
              taskRow.querySelector("td:nth-child(3)").innerText;

            const inputTaskName = document.createElement("input");
            inputTaskName.type = "text";
            inputTaskName.value = currentTaskName;

            const inputTaskDate = document.createElement("input");
            inputTaskDate.type = "date";
            inputTaskDate.value = currentTaskDate;

            const inputTaskAssignee = document.createElement("input");
            inputTaskAssignee.type = "text";
            inputTaskAssignee.value = currentTaskAssignee;

            taskRow.querySelector("td:nth-child(1)").innerHTML = "";
            taskRow.querySelector("td:nth-child(1)").appendChild(inputTaskName);

            taskRow.querySelector("td:nth-child(2)").innerHTML = "";
            taskRow.querySelector("td:nth-child(2)").appendChild(inputTaskDate);

            taskRow.querySelector("td:nth-child(3)").innerHTML = "";
            taskRow
              .querySelector("td:nth-child(3)")
              .appendChild(inputTaskAssignee);

            editButton.textContent = "Save";
            editButton.classList.add("saveTask");

            deleteButton.disabled = true;

            editButton.removeEventListener("click", editTaskHandler);
            editButton.addEventListener("click", saveTaskHandler);
          }
        }

        function saveTaskHandler() {
          const saveButton = this;
          const taskRow = saveButton.parentElement.parentElement;
          const deleteButton = taskRow.querySelector(".deleteTask");

          const inputTaskName = taskRow.querySelector("input[type='text']");
          const inputTaskDate = taskRow.querySelector("input[type='date']");
          const inputTaskAssignee = taskRow.querySelector("input[type='text']");

          const editedTaskName = inputTaskName.value;
          const editedTaskDate = inputTaskDate.value;
          const editedTaskAssignee = inputTaskAssignee.value;

          taskRow.querySelector("td:nth-child(1)").innerText = editedTaskName;
          taskRow.querySelector("td:nth-child(2)").innerText = editedTaskDate;
          taskRow.querySelector("td:nth-child(3)").innerText =
            editedTaskAssignee;

          saveButton.textContent = "Edit";
          saveButton.classList.remove("saveTask");

          deleteButton.disabled = false;

          saveButton.removeEventListener("click", saveTaskHandler);
          saveButton.addEventListener("click", editTaskHandler);
        }
      });
    </script>
    <footer>
      <p>&copy; 2024 StudentPreneur. All rights reserved.</p>
    </footer>
  </body>
</html>
