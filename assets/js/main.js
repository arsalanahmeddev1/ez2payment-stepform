$(document).ready(function () {
  var totalSteps = 5; // Total number of steps to display
  var currentStep = 1;
  var initialProgress = 25; // Initial progress percentage
  var isCheckAppended = false;
  var isScrollingToBottom = false;

  // Function to show the current step and hide others
  function showStep(step) {
    // Ensure currentStep is within the range of totalSteps
    currentStep = Math.min(Math.max(step, 1), totalSteps);

    $('.step-form').removeClass('active');
    $('#step' + currentStep).addClass('active');

    // Update progress bar
    var progressPercentage;
    if (currentStep < totalSteps) {
      progressPercentage = initialProgress + (currentStep - 1) * ((100 - initialProgress) / (totalSteps - 2));
    } else {
      progressPercentage = 100;
    }
    $('.progress-bar').css('width', progressPercentage + '%');

    // Update step count
    var displayStep = (currentStep < totalSteps) ? currentStep : currentStep - 1;
    $('.count span:last-child').text(displayStep + '/' + (totalSteps - 1)); // Display count out of totalSteps - 1

    // Show/hide check icons based on the current step
    $('.left-list-wrap li').removeClass('active'); // Hide all icons
    for (var i = 0; i < currentStep - 1; i++) {
      $('.left-list-wrap li:eq(' + i + ')').addClass('active'); // Show icons up to current step
    }
    // Make current step bold and change color to green
    $('.left-list-wrap li span').removeClass('current');
    $('.left-list-wrap li:eq(' + (currentStep - 1) + ') span').addClass('current');

    // Initialize Select2 on select elements
    $('#step' + currentStep + ' .mySelect').select2({
      minimumResultsForSearch: -1 // Disable search feature
    });
  }

  // Handle all click events
  $(document).on('click', function(event) {
    var target = $(event.target);

    // Next button click event
    if (target.is('button[id^=next]')) {
      // Check if currentStep is within the range of totalSteps
      if (currentStep < totalSteps) {
        var fieldWrap = $('#step' + currentStep + ' .field-wrap');
        var select = fieldWrap.find('select');
        var input = fieldWrap.find('input');

        // Check if select element exists and if its value is empty
        if (select.length && select.val() === '') {
          fieldWrap.find('.error-message').show();
          return; // Prevent further execution if select is empty
        }

        // Check if input element exists and if its value is empty
        if (input.length && input.val() === '') {
          fieldWrap.find('.error-message').show();
          return; // Prevent further execution if input is empty
        }

        // If all fields are filled, proceed to the next step
        showStep(currentStep + 1);
      }
    }

    // Previous button click event
    if (target.is('button[id^=prev]') || target.is('.top-back-btn')) {
      showStep(currentStep - 1);
    }

    // Handle click event on list items to navigate back to previous steps
    if (target.closest('.left-list-wrap li').length) {
      var index = target.closest('.left-list-wrap li').index() + 1;
      if (index < currentStep) {
        showStep(index);
      }
    }

    // Handle file upload box click event
    if (target.is('#fileUploadBox')) {
      $('#fileInput').click();
    }

    // Handle file input change event
    if (target.is('#fileInput')) {
      var selectedFile = target.prop('files')[0];
      console.log('Selected file:', selectedFile);
    }
  });

  // Scroll arrow function
  function checkOverflow() {
    var mainFormWrap = $(".main-form-wrap")[0];
    if (mainFormWrap.scrollHeight > mainFormWrap.clientHeight) {
      $(".downArrow").show(); // If overflow, show arrow div
    } else {
      $(".downArrow").hide(); // If no overflow, hide arrow div
    }
  }

  // Initial check
  checkOverflow();

  // Check overflow on window resize
  $(window).resize(function () {
    checkOverflow();
  });

  $(".main-form-wrap").scroll(function () {
    var scrollIndicator = $(this)[0];
    var arrowImage = $("#arrowImage");

    // Check if scrolled to the bottom
    if (scrollIndicator.scrollTop + scrollIndicator.clientHeight >= scrollIndicator.scrollHeight) {
      if (!isScrollingToBottom) {
        isScrollingToBottom = true;
        arrowImage.attr("src", "./assets/images/arrow-top.webp");
      }
    } else {
      if (isScrollingToBottom) {
        isScrollingToBottom = false;
        arrowImage.attr("src", "./assets/images/arrow-bottom.webp");
      }
    }
  });

  // Initialize Select2 on the first step
  $('.mySelect').select2({
    minimumResultsForSearch: -1 // Disable search feature
  });

  // Show initial step
  showStep(currentStep);
});
