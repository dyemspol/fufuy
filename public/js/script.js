// Sample data
const sampleData = {
    sales: [
        { id: 'TXN001', branch: 'Manila', amount: 1250.50, date: '2024-01-15', status: 'Completed' },
        { id: 'TXN002', branch: 'Cebu', amount: 890.75, date: '2024-01-15', status: 'Completed' },
        { id: 'TXN003', branch: 'Davao', amount: 2340.25, date: '2024-01-15', status: 'Completed' },
        { id: 'TXN004', branch: 'Quezon City', amount: 567.00, date: '2024-01-15', status: 'Pending' },
        { id: 'TXN005', branch: 'Manila', amount: 1890.50, date: '2024-01-14', status: 'Completed' },
        { id: 'TXN006', branch: 'Cebu', amount: 445.25, date: '2024-01-14', status: 'Completed' },
        { id: 'TXN007', branch: 'Davao', amount: 1234.75, date: '2024-01-14', status: 'Completed' },
        { id: 'TXN008', branch: 'Quezon City', amount: 789.50, date: '2024-01-14', status: 'Completed' }
    ],
    inventory: [
        { product: 'Rice (5kg)', category: 'Groceries', stock: 45, price: 250.00, branch: 'Manila' },
        { product: 'Coca Cola (1.5L)', category: 'Beverages', stock: 120, price: 65.00, branch: 'Manila' },
        { product: 'Bread Loaf', category: 'Groceries', stock: 8, price: 45.00, branch: 'Cebu' },
        { product: 'Detergent Powder', category: 'Household', stock: 25, price: 180.00, branch: 'Cebu' },
        { product: 'Instant Noodles', category: 'Snacks', stock: 200, price: 12.50, branch: 'Davao' },
        { product: 'Cooking Oil (1L)', category: 'Groceries', stock: 15, price: 85.00, branch: 'Davao' },
        { product: 'Shampoo', category: 'Household', stock: 30, price: 125.00, branch: 'Quezon City' },
        { product: 'Potato Chips', category: 'Snacks', stock: 0, price: 35.00, branch: 'Quezon City' },
        { product: 'Milk (1L)', category: 'Beverages', stock: 35, price: 75.00, branch: 'Manila' },
        { product: 'Canned Sardines', category: 'Groceries', stock: 3, price: 28.00, branch: 'Cebu' }
    ],
    employees: [
        { id: 1, name: 'Maria Santos', position: 'Manager', branch: 'manila', status: 'active', phone: '09171234567', email: 'maria.santos@groceryhub.ph' },
        { id: 2, name: 'Juan Dela Cruz', position: 'Cashier', branch: 'manila', status: 'active', phone: '09181234567', email: 'juan.delacruz@groceryhub.ph' },
        { id: 3, name: 'Ana Reyes', position: 'Stock Clerk', branch: 'manila', status: 'on-leave', phone: '09191234567', email: 'ana.reyes@groceryhub.ph' },
        { id: 4, name: 'Pedro Garcia', position: 'Manager', branch: 'cebu', status: 'active', phone: '09321234567', email: 'pedro.garcia@groceryhub.ph' },
        { id: 5, name: 'Carmen Lopez', position: 'Cashier', branch: 'cebu', status: 'active', phone: '09331234567', email: 'carmen.lopez@groceryhub.ph' },
        { id: 6, name: 'Roberto Mendoza', position: 'Security Guard', branch: 'cebu', status: 'active', phone: '09341234567', email: 'roberto.mendoza@groceryhub.ph' },
        { id: 7, name: 'Linda Fernandez', position: 'Manager', branch: 'davao', status: 'active', phone: '09821234567', email: 'linda.fernandez@groceryhub.ph' },
        { id: 8, name: 'Carlos Ramos', position: 'Cashier', branch: 'davao', status: 'active', phone: '09831234567', email: 'carlos.ramos@groceryhub.ph' },
        { id: 9, name: 'Sofia Torres', position: 'Stock Clerk', branch: 'davao', status: 'active', phone: '09841234567', email: 'sofia.torres@groceryhub.ph' },
        { id: 10, name: 'Miguel Cruz', position: 'Manager', branch: 'quezon', status: 'active', phone: '09281234567', email: 'miguel.cruz@groceryhub.ph' },
        { id: 11, name: 'Elena Morales', position: 'Cashier', branch: 'quezon', status: 'on-leave', phone: '09291234567', email: 'elena.morales@groceryhub.ph' },
        { id: 12, name: 'Diego Herrera', position: 'Cleaner', branch: 'quezon', status: 'active', phone: '09201234567', email: 'diego.herrera@groceryhub.ph' }
    ]
};

// Navigation functionality
function initNavigation() {
    const navItems = document.querySelectorAll('.nav-item, .mobile-nav-item');
    const sections = document.querySelectorAll('.section');

    navItems.forEach(item => {
        item.addEventListener('click', () => {
            const targetSection = item.dataset.section;
            
            // Update active navigation item
            navItems.forEach(nav => nav.classList.remove('active'));
            item.classList.add('active');
            
            // Show target section
            sections.forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(targetSection).classList.add('active');
            
            // Load section-specific data
            loadSectionData(targetSection);
        });
    });
}

// Load section-specific data
function loadSectionData(section) {
    switch(section) {
        case 'sales':
            loadSalesData();
            break;
        case 'inventory':
            loadInventoryData();
            break;
        case 'management':
            loadManagementData();
            break;
    }
}

// Load sales data
function loadSalesData() {
    const tableBody = document.getElementById('sales-table-body');
    if (!tableBody) return;
    
    tableBody.innerHTML = '';
    
    sampleData.sales.forEach(sale => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${sale.id}</td>
            <td>${sale.branch}</td>
            <td>₱${sale.amount.toLocaleString()}</td>
            <td>${sale.date}</td>
            <td>
                <span class="status ${sale.status.toLowerCase()}">${sale.status}</span>
            </td>
        `;
        tableBody.appendChild(row);
    });
}

// Load inventory data
function loadInventoryData() {
    const tableBody = document.getElementById('inventory-table-body');
    if (!tableBody) return;
    
    tableBody.innerHTML = '';
    
    sampleData.inventory.forEach(item => {
        const row = document.createElement('tr');
        const stockClass = item.stock === 0 ? 'out-of-stock' : item.stock < 10 ? 'low-stock' : '';
        
        row.innerHTML = `
            <td>${item.product}</td>
            <td>${item.category}</td>
            <td>
                <span class="stock ${stockClass}">${item.stock}</span>
            </td>
            <td>₱${item.price.toFixed(2)}</td>
            <td>${item.branch}</td>
            <td>
                <button class="btn btn-sm btn-outline" onclick="editProduct('${item.product}')">Edit</button>
                <button class="btn btn-sm btn-outline" onclick="deleteProduct('${item.product}')">Delete</button>
            </td>
        `;
        tableBody.appendChild(row);
    });
}

// Load management data
function loadManagementData() {
    // This would typically load management-specific data
    console.log('Loading management data...');
    initOperatingHours();
}

// Initialize operating hours functionality
function initOperatingHours() {
    const branchSelector = document.getElementById('branch-settings-selector');
    const openingTime = document.getElementById('opening-time');
    const closingTime = document.getElementById('closing-time');
    const minStockAlert = document.getElementById('min-stock-alert');
    
    if (branchSelector && openingTime && closingTime && minStockAlert) {
        // Load settings for default branch
        loadBranchSettings('manila');
        
        // Add event listener for branch selection
        branchSelector.addEventListener('change', function() {
            loadBranchSettings(this.value);
        });
        
        // Add event listeners to save changes
        openingTime.addEventListener('change', () => saveBranchSettings(branchSelector.value));
        closingTime.addEventListener('change', () => saveBranchSettings(branchSelector.value));
        minStockAlert.addEventListener('change', () => saveBranchSettings(branchSelector.value));
        
        // Add save button functionality
        const saveButton = document.querySelector('.management-card .btn-secondary');
        if (saveButton) {
            saveButton.addEventListener('click', () => {
                saveBranchSettings(branchSelector.value);
                alert('Branch settings saved successfully!');
            });
        }
    }
}

// Load branch settings
function loadBranchSettings(branch) {
    const openingTime = document.getElementById('opening-time');
    const closingTime = document.getElementById('closing-time');
    const minStockAlert = document.getElementById('min-stock-alert');
    
    // Load saved settings from localStorage
    const savedSettings = localStorage.getItem(`branchSettings_${branch}`);
    
    if (savedSettings) {
        const settings = JSON.parse(savedSettings);
        openingTime.value = settings.openingTime || '06:00';
        closingTime.value = settings.closingTime || '22:00';
        minStockAlert.value = settings.minStockAlert || '10';
    } else {
        // Default values
        openingTime.value = '06:00';
        closingTime.value = '22:00';
        minStockAlert.value = '10';
    }
}

// Save branch settings to localStorage
function saveBranchSettings(branch) {
    const openingTime = document.getElementById('opening-time').value;
    const closingTime = document.getElementById('closing-time').value;
    const minStockAlert = document.getElementById('min-stock-alert').value;
    
    const settings = {
        openingTime,
        closingTime,
        minStockAlert
    };
    
    localStorage.setItem(`branchSettings_${branch}`, JSON.stringify(settings));
    
    console.log(`Settings saved for ${branch} branch: ${formatTime(openingTime)} - ${formatTime(closingTime)}, Min Stock: ${minStockAlert}`);
}

// Format time to 12-hour format
function formatTime(time24) {
    const [hours, minutes] = time24.split(':');
    const hour12 = hours % 12 || 12;
    const ampm = hours < 12 ? 'AM' : 'PM';
    return `${hour12}:${minutes} ${ampm}`;
}

// Chart functionality (simple canvas drawing)
function drawSalesChart() {
    const canvas = document.getElementById('salesChart');
    if (!canvas) return;
    
    const ctx = canvas.getContext('2d');
    canvas.width = canvas.offsetWidth;
    canvas.height = canvas.offsetHeight;
    
    // Sample data for the chart
    const data = [45200, 38900, 52100, 47800, 41200, 49300, 53700];
    const labels = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
    
    // Clear canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    
    // Set up chart parameters
    const padding = 40;
    const chartWidth = canvas.width - 2 * padding;
    const chartHeight = canvas.height - 2 * padding;
    const maxValue = Math.max(...data);
    const stepX = chartWidth / (data.length - 1);
    
    // Draw grid lines
    ctx.strokeStyle = '#334155';
    ctx.lineWidth = 1;
    
    for (let i = 0; i <= 5; i++) {
        const y = padding + (chartHeight / 5) * i;
        ctx.beginPath();
        ctx.moveTo(padding, y);
        ctx.lineTo(canvas.width - padding, y);
        ctx.stroke();
    }
    
    // Draw the line
    ctx.strokeStyle = '#3b82f6';
    ctx.lineWidth = 3;
    ctx.beginPath();
    
    data.forEach((value, index) => {
        const x = padding + index * stepX;
        const y = padding + chartHeight - (value / maxValue) * chartHeight;
        
        if (index === 0) {
            ctx.moveTo(x, y);
        } else {
            ctx.lineTo(x, y);
        }
    });
    
    ctx.stroke();
    
    // Draw data points
    ctx.fillStyle = '#3b82f6';
    data.forEach((value, index) => {
        const x = padding + index * stepX;
        const y = padding + chartHeight - (value / maxValue) * chartHeight;
        
        ctx.beginPath();
        ctx.arc(x, y, 4, 0, 2 * Math.PI);
        ctx.fill();
    });
    
    // Draw labels
    ctx.fillStyle = '#94a3b8';
    ctx.font = '12px sans-serif';
    ctx.textAlign = 'center';
    
    labels.forEach((label, index) => {
        const x = padding + index * stepX;
        const y = canvas.height - 10;
        ctx.fillText(label, x, y);
    });
}

// Modal functionality
function openAddProductModal() {
    document.getElementById('addProductModal').classList.add('active');
}

function closeAddProductModal() {
    document.getElementById('addProductModal').classList.remove('active');
}

// Employee modal functionality
function openEmployeeModal() {
    document.getElementById('employeeModal').classList.add('active');
    loadEmployeeData(); // Ensure employee table is populated when modal opens
}

function closeEmployeeModal() {
    document.getElementById('employeeModal').classList.remove('active');
}

// Product management
function editProduct(productName) {
    alert(`Edit functionality for ${productName} would be implemented here.`);
}

function deleteProduct(productName) {
    if (confirm(`Are you sure you want to delete ${productName}?`)) {
        alert(`${productName} deleted successfully.`);
        loadInventoryData();
    }
}

// Search and filter functionality
function initSearchAndFilter() {
    const searchInput = document.querySelector('.search-input');
    const filterSelect = document.querySelector('.filter-select');
    
    if (searchInput) {
        searchInput.addEventListener('input', filterInventory);
    }
    
    if (filterSelect) {
        filterSelect.addEventListener('change', filterInventory);
    }
}

function filterInventory() {
    const searchTerm = document.querySelector('.search-input').value.toLowerCase();
    const categoryFilter = document.querySelector('.filter-select').value;
    
    const filteredData = sampleData.inventory.filter(item => {
        const matchesSearch = item.product.toLowerCase().includes(searchTerm) ||
                            item.category.toLowerCase().includes(searchTerm) ||
                            item.branch.toLowerCase().includes(searchTerm);
        
        const matchesCategory = categoryFilter === 'all' || 
                              item.category.toLowerCase() === categoryFilter;
        
        return matchesSearch && matchesCategory;
    });
    
    displayFilteredInventory(filteredData);
}

function displayFilteredInventory(data) {
    const tableBody = document.getElementById('inventory-table-body');
    if (!tableBody) return;
    
    tableBody.innerHTML = '';
    
    data.forEach(item => {
        const row = document.createElement('tr');
        const stockClass = item.stock === 0 ? 'out-of-stock' : item.stock < 10 ? 'low-stock' : '';
        
        row.innerHTML = `
            <td>${item.product}</td>
            <td>${item.category}</td>
            <td>
                <span class="stock ${stockClass}">${item.stock}</span>
            </td>
            <td>₱${item.price.toFixed(2)}</td>
            <td>${item.branch}</td>
            <td>
                <button class="btn btn-sm btn-outline" onclick="editProduct('${item.product}')">Edit</button>
                <button class="btn btn-sm btn-outline" onclick="deleteProduct('${item.product}')">Delete</button>
            </td>
        `;
        tableBody.appendChild(row);
    });
}

// Branch selector functionality
function initBranchSelector() {
    const branchSelector = document.getElementById('branch-selector');
    if (branchSelector) {
        branchSelector.addEventListener('change', function() {
            const selectedBranch = this.value;
            updateDashboardData(selectedBranch);
        });
    }
}

function updateDashboardData(branch) {
    // This would filter and update dashboard data based on selected branch
    console.log(`Updating dashboard for branch: ${branch}`);
    
    // Update metrics based on branch selection
    if (branch === 'all') {
        // Show all branches data
        updateMetrics({
            revenue: '₱2,450,000',
            branches: '4',
            inventory: '15,847',
            employees: '48'
        });
    } else {
        // Show specific branch data
        const branchData = getBranchData(branch);
        updateMetrics(branchData);
    }
}

function getBranchData(branch) {
    const branchDataMap = {
        'manila': {
            revenue: '₱850,000',
            branches: '1',
            inventory: '5,234',
            employees: '18'
        },
        'cebu': {
            revenue: '₱650,000',
            branches: '1',
            inventory: '4,123',
            employees: '14'
        },
        'davao': {
            revenue: '₱550,000',
            branches: '1',
            inventory: '3,456',
            employees: '12'
        },
        'quezon': {
            revenue: '₱400,000',
            branches: '1',
            inventory: '3,034',
            employees: '8'
        }
    };
    
    return branchDataMap[branch] || branchDataMap['manila'];
}

function updateMetrics(data) {
    const metricValues = document.querySelectorAll('.metric-value');
    if (metricValues.length >= 4) {
        metricValues[0].textContent = data.revenue;
        metricValues[1].textContent = data.branches;
        metricValues[2].textContent = data.inventory;
        metricValues[3].textContent = data.employees;
    }
}

// Form submission
function initFormSubmission() {
    const addProductForm = document.getElementById('addProductForm');
    if (addProductForm) {
        addProductForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const productData = {
                product: formData.get('product'),
                category: formData.get('category'),
                price: parseFloat(formData.get('price')),
                stock: parseInt(formData.get('stock')),
                branch: formData.get('branch')
            };
            
            // Add to sample data
            sampleData.inventory.push(productData);
            
            // Reload inventory table
            loadInventoryData();
            
            // Close modal
            closeAddProductModal();
            
            // Reset form
            this.reset();
            
            // Show success message
            alert('Product added successfully!');
        });
    }
}

// Real-time updates (simulated)
function startRealTimeUpdates() {
    setInterval(() => {
        // Simulate real-time data updates
        updateRandomMetrics();
    }, 30000); // Update every 30 seconds
}

function updateRandomMetrics() {
    const metrics = document.querySelectorAll('.metric-value');
    metrics.forEach(metric => {
        const currentValue = metric.textContent;
        if (currentValue.includes('₱')) {
            // Update revenue with small random changes
            const numValue = parseInt(currentValue.replace(/[₱,]/g, ''));
            const change = Math.floor(Math.random() * 10000) - 5000;
            const newValue = numValue + change;
            metric.textContent = `₱${newValue.toLocaleString()}`;
        }
    });
}

// Initialize application
function init() {
    initNavigation();
    initSearchAndFilter();
    initBranchSelector();
    initFormSubmission();
    initEmployeeManagement();
    initCustomReports();
    
    // Load initial data
    loadSalesData();
    loadInventoryData();
    loadEmployeeData();
    
    // Draw charts
    setTimeout(drawSalesChart, 100);
    
    // Start real-time updates
    startRealTimeUpdates();
    
    // Add window resize handler for chart
    window.addEventListener('resize', () => {
        setTimeout(drawSalesChart, 100);
    });
}

// Wait for DOM to load
document.addEventListener('DOMContentLoaded', init);

// Employee Management Functions
function initEmployeeManagement() {
    // Initialize employee management functionality
    console.log('Employee management initialized');
}

function openAddEmployeeForm() {
    document.getElementById('addEmployeeModal').classList.add('active');
}

function closeAddEmployeeModal() {
    document.getElementById('addEmployeeModal').classList.remove('active');
}

function openEmployeeModal() {
    document.getElementById('employeeModal').classList.add('active');
    loadEmployeeData();
}

function closeEmployeeModal() {
    document.getElementById('employeeModal').classList.remove('active');
}

// Custom Reports Functions
function initCustomReports() {
    // Initialize custom reports functionality
    console.log('Custom reports initialized');
}

function generateReport() {
    alert('Report generation functionality would be implemented here.');
}

function openCustomReportModal() {
    document.getElementById('customReportModal').classList.add('active');
}

function closeCustomReportModal() {
    document.getElementById('customReportModal').classList.remove('active');
}

// Add styles for status indicators
const styleSheet = document.createElement('style');
styleSheet.textContent = `
    .status {
        padding: 0.25rem 0.5rem;
        border-radius: 0.25rem;
        font-size: 0.75rem;
        font-weight: 500;
        text-transform: uppercase;
    }
    
    .status.completed {
        background: #065f46;
        color: #10b981;
    }
    
    .status.pending {
        background: #92400e;
        color: #f59e0b;
    }
    
    .stock.out-of-stock {
        color: #ef4444;
        font-weight: 600;
    }
    
    .stock.low-stock {
        color: #f59e0b;
        font-weight: 600;
    }
    
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
        margin: 0 0.125rem;
    }
`;
