<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Store Owner Portal</title>
     <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header class="header">
            <div class="header-content">
                <div class="logo">
                    <h1>🏪 GroceryHub</h1>
                    <span>Owner Portal</span>
                </div>
                <nav class="nav">
                    <button class="nav-item active" data-section="dashboard">Dashboard</button>
                    <button class="nav-item" data-section="sales">Sales</button>
                    <button class="nav-item" data-section="inventory">Inventory</button>
                    <button class="nav-item" data-section="management">Management</button>
                </nav>
                <div class="user-info">
                    <span>Welcome, Juan Dela Cruz</span>
                    <div class="user-avatar">JD</div>
                </div>
            </div>  
        </header>

        <!-- Mobile Navigation -->
        <nav class="mobile-nav">
            <button class="mobile-nav-item active" data-section="dashboard">
                <span>📊</span>
                Dashboard
            </button>
            <button class="mobile-nav-item" data-section="sales">
                <span>💰</span>
                Sales
            </button>
            <button class="mobile-nav-item" data-section="inventory">
                <span>📦</span>
                Inventory
            </button>
            <button class="mobile-nav-item" data-section="management">
                <span>⚙️</span>
                Management
            </button>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Dashboard Section -->
            <section id="dashboard" class="section active">
                <div class="section-header">
                    <h2>Dashboard Overview</h2>
                    <select id="branch-selector" class="branch-selector">
                        <option value="all">All Branches</option>
                        <option value="manila">Manila Branch</option>
                        <option value="cebu">Cebu Branch</option>
                        <option value="davao">Davao Branch</option>
                        <option value="quezon">Quezon City Branch</option>
                    </select>
                </div>

                <!-- Key Metrics -->
                <div class="metrics-grid">
                    <div class="metric-card">
                        <div class="metric-icon">💰</div>
                        <div class="metric-info">
                            <h3>Total Revenue</h3>
                            <p class="metric-value">₱2,450,000</p>
                            <span class="metric-change positive">+12.5%</span>
                        </div>
                    </div>
                    <div class="metric-card">
                        <div class="metric-icon">🏪</div>
                        <div class="metric-info">
                            <h3>Active Branches</h3>
                            <p class="metric-value">4</p>
                            <span class="metric-change neutral">All Online</span>
                        </div>
                    </div>
                    <div class="metric-card">
                        <div class="metric-icon">📦</div>
                        <div class="metric-info">
                            <h3>Total Inventory</h3>
                            <p class="metric-value">15,847</p>
                            <span class="metric-change negative">-2.3%</span>
                        </div>
                    </div>
                    <div class="metric-card">
                        <div class="metric-icon">👥</div>
                        <div class="metric-info">
                            <h3>Total Employees</h3>
                            <p class="metric-value">48</p>
                            <span class="metric-change positive">+3 new</span>
                        </div>
                    </div>
                </div>

                <!-- Charts -->
                <div class="charts-grid">
                    <div class="chart-card">
                        <h3>Sales Trend (7 Days)</h3>
                        <div class="chart-container">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                    <div class="chart-card">
                        <h3>Branch Performance</h3>
                        <div class="branch-performance">
                            <div class="branch-item">
                                <div class="branch-info">
                                    <span class="branch-name">Manila</span>
                                    <span class="branch-sales">₱850,000</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 85%"></div>
                                </div>
                            </div>
                            <div class="branch-item">
                                <div class="branch-info">
                                    <span class="branch-name">Cebu</span>
                                    <span class="branch-sales">₱650,000</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 65%"></div>
                                </div>
                            </div>
                            <div class="branch-item">
                                <div class="branch-info">
                                    <span class="branch-name">Davao</span>
                                    <span class="branch-sales">₱550,000</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 55%"></div>
                                </div>
                            </div>
                            <div class="branch-item">
                                <div class="branch-info">
                                    <span class="branch-name">Quezon City</span>
                                    <span class="branch-sales">₱400,000</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 40%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Sales Section -->
            <section id="sales" class="section">
                <div class="section-header">
                    <h2>Sales Analytics</h2>
                    <div class="date-range">
                        <input type="date" id="start-date" value="2024-01-01">
                        <input type="date" id="end-date" value="2024-01-31">
                    </div>
                </div>

                <div class="sales-grid">
                    <div class="sales-card">
                        <h3>Daily Sales</h3>
                        <div class="sales-amount">₱45,200</div>
                        <div class="sales-change positive">+8.2% from yesterday</div>
                    </div>
                    <div class="sales-card">
                        <h3>Weekly Sales</h3>
                        <div class="sales-amount">₱298,500</div>
                        <div class="sales-change positive">+15.7% from last week</div>
                    </div>
                    <div class="sales-card">
                        <h3>Monthly Sales</h3>
                        <div class="sales-amount">₱1,250,000</div>
                        <div class="sales-change negative">-2.1% from last month</div>
                    </div>
                </div>

                <div class="sales-table-container">
                    <h3>Recent Transactions</h3>
                    <table class="sales-table">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Branch</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="sales-table-body">
                            <!-- Dynamic content will be inserted here -->
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Inventory Section -->
            <section id="inventory" class="section">
                <div class="section-header">
                    <h2>Inventory Management</h2>
                    <button class="btn btn-primary" onclick="openAddProductModal()">Add Product</button>
                </div>

                <div class="inventory-stats">
                    <div class="stat-card">
                        <h4>Low Stock Items</h4>
                        <div class="stat-value warning">23</div>
                    </div>
                    <div class="stat-card">
                        <h4>Out of Stock</h4>
                        <div class="stat-value danger">5</div>
                    </div>
                    <div class="stat-card">
                        <h4>Total Products</h4>
                        <div class="stat-value">1,247</div>
                    </div>
                    <div class="stat-card">
                        <h4>Total Value</h4>
                        <div class="stat-value">₱3,450,000</div>
                    </div>
                </div>

                <div class="inventory-table-container">
                    <div class="table-controls">
                        <input type="search" placeholder="Search products..." class="search-input">
                        <select class="filter-select">
                            <option value="all">All Categories</option>
                            <option value="groceries">Groceries</option>
                            <option value="beverages">Beverages</option>
                            <option value="snacks">Snacks</option>
                            <option value="household">Household</option>
                        </select>
                    </div>
                    <table class="inventory-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Category</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Branch</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="inventory-table-body">
                            <!-- Dynamic content will be inserted here -->
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Management Section -->
            <section id="management" class="section">
                <div class="section-header">
                    <h2>Management Tools</h2>
                </div>

                <div class="management-grid">
                    <div class="management-card">
                        <h3>Employee Management</h3>
                        <div class="employee-stats">
                            <div class="employee-stat">
                                <span class="stat-label">Total Employees</span>
                                <span class="stat-value">48</span>
                            </div>
                            <div class="employee-stat">
                                <span class="stat-label">On Duty</span>
                                <span class="stat-value">32</span>
                            </div>
                            <div class="employee-stat">
                                <span class="stat-label">On Leave</span>
                                <span class="stat-value">3</span>
                            </div>
                        </div>
                        <button class="btn btn-secondary" onclick="openEmployeeModal()">Manage Employees</button>
                    </div>

                    <div class="management-card">
                        <h3>Branch Settings</h3>
                        <div class="branch-settings">
                            <div class="setting-item">
                                <span>Select Branch</span>
                                <select id="branch-settings-selector" class="setting-select">
                                    <option value="manila">Manila Branch</option>
                                    <option value="cebu">Cebu Branch</option>
                                    <option value="davao">Davao Branch</option>
                                    <option value="quezon">Quezon City Branch</option>
                                </select>
                            </div>
                            <div class="setting-item">
                                <span>Operating Hours</span>
                                <div class="operating-hours">
                                    <input type="time" id="opening-time" class="time-input">
                                    <span class="time-separator">to</span>
                                    <input type="time" id="closing-time" class="time-input">
                                </div>
                            </div>
                            <div class="setting-item">
                                <span>Minimum Stock Alert</span>
                                <input type="number" id="min-stock-alert" value="10" class="setting-input">
                            </div>
                        </div>
                        <button class="btn btn-secondary">Save Settings</button>
                    </div>

                    <div class="management-card">
                        <h3>System Reports</h3>
                        <div class="report-buttons">
                            <button class="btn btn-outline" onclick="generateReport('daily')">Daily Report</button>
                            <button class="btn btn-outline" onclick="generateReport('weekly')">Weekly Report</button>
                            <button class="btn btn-outline" onclick="generateReport('monthly')">Monthly Report</button>
                            <button class="btn btn-outline" onclick="openCustomReportModal()">Custom Report</button>
                        </div>
                        <div id="report-status" class="report-status"></div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Employee Management Modal -->
    <div id="employeeModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Employee Management</h3>
                <button class="close-btn" onclick="closeEmployeeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <div class="employee-controls">
                    <button class="btn btn-primary" onclick="openAddEmployeeForm()">Add Employee</button>
                    <select id="employee-branch-filter" class="filter-select">
                        <option value="all">All Branches</option>
                        <option value="manila">Manila</option>
                        <option value="cebu">Cebu</option>
                        <option value="davao">Davao</option>
                        <option value="quezon">Quezon City</option>
                    </select>
                </div>
                <div class="employee-table-container">
                    <table class="employee-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Branch</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="employee-table-body">
                            <!-- Dynamic content -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Employee Modal -->
    <div id="addEmployeeModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Add New Employee</h3>
                <button class="close-btn" onclick="closeAddEmployeeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <form id="addEmployeeForm">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Position</label>
                        <select name="position" required>
                            <option value="">Select Position</option>
                            <option value="Manager">Manager</option>
                            <option value="Cashier">Cashier</option>
                            <option value="Stock Clerk">Stock Clerk</option>
                            <option value="Security Guard">Security Guard</option>
                            <option value="Cleaner">Cleaner</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Branch</label>
                        <select name="branch" required>
                            <option value="">Select Branch</option>
                            <option value="manila">Manila</option>
                            <option value="cebu">Cebu</option>
                            <option value="davao">Davao</option>
                            <option value="quezon">Quezon City</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="modal-actions">
                        <button type="button" class="btn btn-secondary" onclick="closeAddEmployeeModal()">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Employee</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Custom Report Modal -->
    <div id="customReportModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Generate Custom Report</h3>
                <button class="close-btn" onclick="closeCustomReportModal()">&times;</button>
            </div>
            <div class="modal-body">
                <form id="customReportForm">
                    <div class="form-group">
                        <label>Report Type</label>
                        <select name="reportType" required>
                            <option value="">Select Report Type</option>
                            <option value="sales">Sales Report</option>
                            <option value="inventory">Inventory Report</option>
                            <option value="employee">Employee Report</option>
                            <option value="financial">Financial Report</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Branch</label>
                        <select name="branch" required>
                            <option value="all">All Branches</option>
                            <option value="manila">Manila</option>
                            <option value="cebu">Cebu</option>
                            <option value="davao">Davao</option>
                            <option value="quezon">Quezon City</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Date Range</label>
                        <div class="date-range">
                            <input type="date" name="startDate" required>
                            <input type="date" name="endDate" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Format</label>
                        <select name="format" required>
                            <option value="pdf">PDF</option>
                            <option value="excel">Excel</option>
                            <option value="csv">CSV</option>
                        </select>
                    </div>
                    <div class="modal-actions">
                        <button type="button" class="btn btn-secondary" onclick="closeCustomReportModal()">Cancel</button>
                        <button type="submit" class="btn btn-primary">Generate Report</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Add Product Modal -->
    <div id="addProductModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Add New Product</h3>
                <button class="close-btn" onclick="closeAddProductModal()">&times;</button>
            </div>
            <div class="modal-body">
                <form id="addProductForm">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" required>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select required>
                            <option value="">Select Category</option>
                            <option value="groceries">Groceries</option>
                            <option value="beverages">Beverages</option>
                            <option value="snacks">Snacks</option>
                            <option value="household">Household</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Price (₱)</label>
                        <input type="number" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label>Stock Quantity</label>
                        <input type="number" required>
                    </div>
                    <div class="form-group">
                        <label>Branch</label>
                        <select required>
                            <option value="">Select Branch</option>
                            <option value="manila">Manila</option>
                            <option value="cebu">Cebu</option>
                            <option value="davao">Davao</option>
                            <option value="quezon">Quezon City</option>
                        </select>
                    </div>
                    <div class="modal-actions">
                        <button type="button" class="btn btn-secondary" onclick="closeAddProductModal()">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>