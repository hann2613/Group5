<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project Management</title>
    <link rel="stylesheet" href="styleTeam.css" />
  </head>
  <body>
    <header>
      <nav>
        <div class="logo"><a href="post.php">StudentPreneur</a></div>
        <a href="post.php">Home</a>
        <a href="learning.php">Learning</a>
        <a href="event.php">Events</a>
        <a href="globalConnections.php">Global Connections</a>
        <div class="icons">
          <a href="teamprofile.php">🧑‍🧒</a>
          <a href="message.php">💬</a>
          <a href="profile.php">👤</a>
          <a href="teamup1.php"><button>Team Up</button></a>
        </div>
      </nav>
    </header>

    <div class="manage-container">
      <div class="manage-projects-bar" id="projects-bar">
        <h2>Projects</h2>
        <div id="projects">
          <div id="projects-list"></div>
          <button id="addProjectButton">+</button>
        </div>
      </div>

      <div class="manage-sprints-bar" id="sprints-bar">
        <h2>Sprints</h2>
        <div id="sprints">
          <div id="sprints-list"></div>
          <button id="addSprintButton">+</button>
        </div>
      </div>

      <div class="tasks" id="tasks">
        <div class="tasks-column" id="to-do">
          <h3>To-do<button class="addTask" data-status="to-do">+</button></h3>
        </div>
        <div class="tasks-column" id="in-progress">
          <h3>
            On progress<button class="addTask" data-status="in-progress">
              +
            </button>
          </h3>
        </div>
        <div class="tasks-column" id="review">
          <h3>Review<button class="addTask" data-status="review">+</button></h3>
        </div>
        <div class="tasks-column" id="done">
          <h3>Done<button class="addTask" data-status="done">+</button></h3>
        </div>
      </div>
    </div>

    <div class="modal" id="modal">
      <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h2 id="modalTitle">Add New</h2>
        <form id="modalForm">
          <label for="modalInput">Name:</label>
          <input type="text" id="modalInput" name="name" required />
          <button type="submit" id="modalSubmitButton">Add</button>
        </form>
      </div>
    </div>

    <div class="task-modal" id="taskModal">
      <div class="task-modal-content">
        <span class="close" id="closeTaskModal">&times;</span>
        <h2>Add New Task</h2>
        <form id="taskForm">
          <label for="taskName">Task Name:</label>
          <input
            type="text"
            id="taskName"
            name="taskName"
            required
          /><br /><label for="taskAssignee">Task Assignee:</label>
          <input
            type="text"
            id="taskAssignee"
            name="taskAssignee"
            required
          /><br />
          <button type="submit">Save</button>
        </form>
      </div>
    </div>

    <footer>
      <p>&copy; 2024 StudentPreneur. All rights reserved.</p>
    </footer>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const addProjectButton = document.getElementById("addProjectButton");
        const addSprintButton = document.getElementById("addSprintButton");
        const modal = document.getElementById("modal");
        const closeModal = document.getElementById("closeModal");
        const modalForm = document.getElementById("modalForm");
        const modalInput = document.getElementById("modalInput");
        const modalTitle = document.getElementById("modalTitle");
        const modalSubmitButton = document.getElementById("modalSubmitButton");
        const projectsList = document.getElementById("projects-list");
        const sprintsList = document.getElementById("sprints-list");
        const taskModal = document.getElementById("taskModal");
        const closeTaskModal = document.getElementById("closeTaskModal");
        const taskForm = document.getElementById("taskForm");
        let currentProject = null;
        let currentSprint = null;
        let currentStatus = null;

        function openModal(type) {
          modal.style.display = "flex";
          modalTitle.textContent =
            type === "project" ? "Add New Project" : "Add New Sprint";
          modalSubmitButton.textContent =
            type === "project" ? "Add Project" : "Add Sprint";
          modalSubmitButton.dataset.type = type;
        }

        function closeModalHandler() {
          modal.style.display = "none";
        }

        function openTaskModal(event) {
          const status = event.target.dataset.status;
          if (!currentSprint) {
            alert("Please select a sprint first.");
            return;
          }
          currentStatus = status;
          taskModal.style.display = "flex";
        }

        function closeTaskModalHandler() {
          taskModal.style.display = "none";
        }

        function addProject(name) {
          const projectDiv = document.createElement("div");
          projectDiv.className = "project-item";
          projectDiv.textContent = name;
          projectDiv.addEventListener("click", () => {
            document
              .querySelectorAll(".project-item")
              .forEach((el) => el.classList.remove("active"));
            projectDiv.classList.add("active");
            currentProject = name;
            updateSprints();
            updateTasks();
          });
          projectsList.appendChild(projectDiv);
        }

        function addSprint(name) {
          const sprintDiv = document.createElement("div");
          sprintDiv.className = "sprint-item";
          sprintDiv.textContent = name;
          sprintDiv.addEventListener("click", () => {
            document
              .querySelectorAll(".sprint-item")
              .forEach((el) => el.classList.remove("active"));
            sprintDiv.classList.add("active");
            currentSprint = name;
            updateTasks();
          });
          sprintsList.appendChild(sprintDiv);
        }

        function addTaskToColumn(status, taskName, assignee) {
          const column = document.getElementById(status);
          const taskDiv = document.createElement("div");
          taskDiv.className = "task-item";
          taskDiv.textContent = `${taskName} (Assignee: ${assignee})`;
          column.appendChild(taskDiv);
        }

        function updateSprints() {
          const sprints = sprintsList.querySelectorAll(".sprint-item");
          sprints.forEach((sprint) => {
            sprint.style.display = currentProject ? "block" : "none";
            if (sprint.classList.contains("active")) {
              sprint.classList.add("active");
            }
          });
        }

        function updateTasks() {
          document.querySelectorAll(".tasks-column").forEach((column) => {
            column.innerHTML = column.querySelector("h3").outerHTML;
          });
          if (currentSprint) {
            document
              .querySelectorAll(".tasks-column .addTask")
              .forEach((button) => {
                button.disabled = !currentSprint;
              });
          }
          bindTaskButtons();
        }

        function bindTaskButtons() {
          const taskButtons = document.querySelectorAll(".addTask");
          taskButtons.forEach((button) => {
            button.addEventListener("click", openTaskModal);
          });
        }

        addProjectButton.addEventListener("click", () => openModal("project"));
        addSprintButton.addEventListener("click", () => {
          if (!currentProject) {
            alert("Please select a project first.");
            return;
          }
          openModal("sprint");
        });

        modalForm.addEventListener("submit", (event) => {
          event.preventDefault();
          const name = modalInput.value.trim();
          if (modalSubmitButton.dataset.type === "project") {
            addProject(name);
          } else {
            addSprint(name);
          }
          closeModalHandler();
          modalForm.reset();
        });

        closeModal.addEventListener("click", closeModalHandler);

        bindTaskButtons();

        closeTaskModal.addEventListener("click", closeTaskModalHandler);

        taskForm.addEventListener("submit", (event) => {
          event.preventDefault();
          const taskName = document.getElementById("taskName").value.trim();
          const taskAssignee = document
            .getElementById("taskAssignee")
            .value.trim();
          if (currentStatus && taskName && taskAssignee) {
            addTaskToColumn(currentStatus, taskName, taskAssignee);
            closeTaskModalHandler();
            taskForm.reset();
          }
        });
      });
    </script>
  </body>
</html>
