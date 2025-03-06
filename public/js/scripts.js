/*!
    * Start Bootstrap - SB Admin v7.0.7 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2023 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});
document.getElementById('addMoreTiming').addEventListener('click', function() {
    // Create new time range elements
    let newTimingDiv = document.createElement('div');
    newTimingDiv.classList.add('d-flex', 'mb-3');

    // From Time Dropdown
    newTimingDiv.innerHTML = `
        <select class="form-control me-2" name="FromHour[]" required>
            <option value="">Select Hour</option>
            ${[...Array(12).keys()].map(i => `<option value="${i+1}">${i+1}</option>`).join('')}
        </select>
        <select class="form-control me-2" name="FromAMPM[]" required>
            <option value="AM">AM</option>
            <option value="PM">PM</option>
        </select>
        <span class="align-self-center">to</span>
        <select class="form-control me-2" name="ToHour[]" required>
            <option value="">Select Hour</option>
            ${[...Array(12).keys()].map(i => `<option value="${i+1}">${i+1}</option>`).join('')}
        </select>
        <select class="form-control me-2" name="ToAMPM[]" required>
            <option value="AM">AM</option>
            <option value="PM">PM</option>
        </select>
        <button type="button" class="btn btn-danger ms-2 removeTiming">Remove</button>
    `;

    // Add event listener to the "Remove" button
    newTimingDiv.querySelector('.removeTiming').addEventListener('click', function() {
        newTimingDiv.remove();
    });

    // Append the new time range to the container
    document.getElementById('additionalTimings').appendChild(newTimingDiv);
});
