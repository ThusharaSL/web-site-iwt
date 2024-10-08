
<div class="admin-side-menu">
    <div class="admin-side-menu-item">
        <ul>
            <li><a onclick="handleTabSelect('dashboard')" href="admin.php">
                    <button class="nav_btns" id="dashboard-btn"><i class="fa-solid fa-gauge" style="margin-right:
                    5px"></i>
                        Dashboard</button>
                </a></li>
            <li><a onclick="handleTabSelect('users')" href="users.php">
                    <button class="nav_btns" id="users-btn"><i style="margin-right:
                    5px" class="fa-regular fa-user"></i> Users</button>
                </a></li>
            <li><a onclick="handleTabSelect('projects')" href="projects.php">
                    <button class="nav_btns" id="projects-btn"><i style="margin-right:
                    5px" class="fa-regular fa-file"></i> Projects</button>
                </a></li>
            <li><a onclick="handleTabSelect('inquiries')" href="inquiries.php">
                    <button class="nav_btns" id="inquiries-btn"><i style="margin-right:
                    5px" class="fa-regular fa-message"></i>
                        Inquiries</button>
                </a></li>
        </ul>
    </div>
</div>


<script>
    // Save the selected tab in localStorage
    function handleTabSelect(tab) {
        window.localStorage.setItem("selectedTab", tab);
    }

    // Get the selected tab from localStorage
    function getSelectedTab() {
        return window.localStorage.getItem("selectedTab");
    }

    // Add 'active' class to the selected tab
    function activateTab(tab) {
        const selectedButton = document.getElementById(`${tab}-btn`);
        console.log('🙂 Selected Button: ', selectedButton);
        if (selectedButton) {
            document.querySelectorAll('.nav_btns').forEach(button => button.classList.remove('active'));
            selectedButton.classList.add('active');
        }
    }

    // add active tab on page load
    window.onload = function() {
        const selectedTab = getSelectedTab();
        console.log('🥳 Selected Tab: ', selectedTab);
        if (selectedTab) {
            activateTab(selectedTab);
        } else {
            activateTab('dashboard');
        }
    };
</script>