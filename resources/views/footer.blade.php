<div class="container mt-4">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 pt-2 pb-2 pe-2 ps-2 footer">
            <div style="container">
                <div class="row row align-items-center">
                    <div class="col-lg-4 d-flex justify-content-center">
                        <button onclick="generatePDF()" class="btn btn-outline-light">Generate PDF</button>
                    </div>

                    <div class="col-lg-4 d-flex justify-content-center dropdown-footer pt-2 pb-2">
                        <div class="dropdown">
                            <!-- Use a JavaScript-controlled label for dropdown text -->
                            <button class="dropdown-toggle dropdownforModal" type="button" id="dateFilterButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <span id="dateFilterLabel">Today</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dateFilterButton">
                                <li><a class="dropdown-item" href="#" onclick="setDateFilterLabel('Today')">Today</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setDateFilterLabel('Yesterday')">Yesterday</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setDateFilterLabel('Last 3 Days')">Last 3 Days</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setDateFilterLabel('Last 5 Days')">Last 5 Days</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setDateFilterLabel('Last 7 Days')">Last 7 Days</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setDateFilterLabel('This Week')">This Week</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setDateFilterLabel('Last Week')">Last Week</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setDateFilterLabel('This Month')">This Month</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setDateFilterLabel('Last Month')">Last Month</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setDateFilterLabel('This Year')">This Year</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setDateFilterLabel('Last Year')">Last Year</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setDateFilterLabel('Overall')">Overall</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setDateFilterLabel('Custom'); handleFilterChange()">Custom</a></li>
                            </ul>
                        </div>
                    </div>
                    

                    <div class=" container col-lg-4 pt-1 pb-1 d-flex mx-auto 
                    justify-content-center icon-filter" style="max-width:70px;">
                        <i class="fas fa-filter filter-icon" onclick="updateChartWithFilter()"></i>
                    </div>

                </div>
            </div>
        </div>

       <!-- Modal for Custom Date Selection -->
<div class="modal fade" id="customDateModal" tabindex="-1" aria-labelledby="customDateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customDateModalLabel">Select Date Range</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="customDateForm" action="#" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="start_date" class="form-label">Start Date:</label>
                        <input type="date" id="start_date" name="start_date" class="form-control"
                               value="{{ request('start_date', \Carbon\Carbon::now()->subDays(6)->toDateString()) }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="end_date" class="form-label">End Date:</label>
                        <input type="date" id="end_date" name="end_date" class="form-control"
                               value="{{ request('end_date', \Carbon\Carbon::now()->toDateString()) }}" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="submitCustomDateForm()">Generate Report</button>
            </div>
        </div>
    </div>
</div>

        <div class="col-lg-3"></div>
    </div>
</div>



<!-- JavaScript Functions -->
<script>
    function setDateFilterLabel(label) {
        document.getElementById('dateFilterLabel').textContent = label;
    }

    function handleFilterChange() {
        const filter = document.getElementById('dateFilterLabel').textContent;
        if (filter === 'Custom') {
            const customDateModal = new bootstrap.Modal(document.getElementById('customDateModal'));
            customDateModal.show();
        }
    }

    function submitCustomDateForm() {
        document.getElementById('customDateForm').submit();
    }

    function generatePDF() {
        alert("PDF Generated!"); // Placeholder for PDF generation logic
    }

    function updateChartWithFilter() {
        const filter = document.getElementById('dateFilterLabel').textContent;
        alert("Chart Updated with filter: " + filter); // Placeholder for chart update logic
    }
</script>