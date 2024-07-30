function openModal() {
    document.getElementById('visaModal').style.display = 'block';
    document.getElementById('modalBackdrop').style.display = 'block';
}

function closeModal() {
    document.getElementById('visaModal').style.display = 'none';
    document.getElementById('modalBackdrop').style.display = 'none';
}
$(function () {
    $("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        labels: {
            finish: "Finaliser",
            next: "Suivant",
            previous: "Avant"
        },
        onFinished: function (event, currentIndex) {

            $("#wizard").submit();
        }
    });
});


    $('.wizard > .steps li a').click(function () {
        $(this).parent().addClass('checked');
        $(this).parent().prevAll().addClass('checked');
        $(this).parent().nextAll().removeClass('checked');
    });
    $('.forward').click(function () {
        $("#wizard").steps('next');
    });
    $('.backward').click(function () {
        $("#wizard").steps('previous');
    });
    $('html').click(function () {
        $('.select .dropdown').hide();
    });
    $('.select').click(function (event) {
        event.stopPropagation();
    });
    $('.select .select-control').click(function () {
        $(this).parent().next().toggle();
    });
    $('.select .dropdown li').click(function () {
        $(this).parent().toggle();
        var text = $(this).attr('rel');
        $(this).parent().prev().find('div').text(text);
    });



function hideImagesOnMobile() {
    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    if (width <= 768) {s
        var imageHolders = document.querySelectorAll('.image-holder');
        imageHolders.forEach(function (imageHolder) {
            imageHolder.style.display = 'none';
        });
    } else {
        var imageHolders = document.querySelectorAll('.image-holder');
        imageHolders.forEach(function (imageHolder) {
            imageHolder.style.display = 'block';
        });
    }
}


hideImagesOnMobile();


window.addEventListener('resize', hideImagesOnMobile);


fetch('api/get-countries.php')
    .then(response => response.json())
    .then(data => {
        const dropdown = document.getElementById('countryDropdown');

        data.forEach(country => {
            const li = document.createElement('li');
            li.textContent = country.name;
            li.setAttribute('rel', country.code);
            li.addEventListener('click', function () {
                document.querySelector('.select-control').textContent = this.textContent;
                dropdown.classList.remove('show');
            });
            dropdown.appendChild(li);
        });
    });

document.querySelector('.select-control').addEventListener('click', function () {
    document.querySelector('.dropdown').classList.toggle('show');
});


document.addEventListener('DOMContentLoaded', function () {
    const fileInput = document.getElementById('fileInput');
    const uploadText = document.getElementById('uploadText');


    if (fileInput && uploadText) {
        fileInput.addEventListener('change', function (event) {
            const files = event.target.files;
            if (files.length > 0) {
                const fileNames = Array.from(files).map(file => file.name).join(', ');
                uploadText.textContent = fileNames;
            } else {
                uploadText.textContent = 'Choisir des photos de visa';
            }
        });
    }
});


document.addEventListener('DOMContentLoaded', (event) => {
    const toggleButton = document.getElementById('toggle-button');
    const paymentOptions = document.getElementById('payment-options');

    toggleButton.addEventListener('click', () => {
        if (paymentOptions.style.display === 'none' || paymentOptions.style.display === '') {
            paymentOptions.style.display = 'block';
        } else {
            paymentOptions.style.display = 'none';
        }
    });

    const paymentButtons = document.querySelectorAll('.payment-option');
    paymentButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            const method = event.currentTarget.getAttribute('data-method');
            alert('Vous avez choisi : ' + method);
            // Ne cache pas les options après la sélection
        });
    });
});


document.addEventListener('DOMContentLoaded', function () {
    var editModal = document.getElementById('editModal');
    editModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; // Button that triggered the modal
        var id = button.getAttribute('data-id');
        var firstName = button.getAttribute('data-first_name');
        var lastName = button.getAttribute('data-last_name');
        var email = button.getAttribute('data-email');
        var phone = button.getAttribute('data-phone');
        var age = button.getAttribute('data-age');
        var gender = button.getAttribute('data-gender');
        var address = button.getAttribute('data-address');
        var city = button.getAttribute('data-city');
        var postalCode = button.getAttribute('data-postal_code');
        var status = button.getAttribute('data-status');

        var modal = editModal.querySelector('form');
        modal.action = '/registrations/' + id; // Update URL for the edit request

        modal.querySelector('#edit-id').value = id;
        modal.querySelector('#edit-first_name').value = firstName;
        modal.querySelector('#edit-last_name').value = lastName;
        modal.querySelector('#edit-email').value = email;
        modal.querySelector('#edit-phone').value = phone;
        modal.querySelector('#edit-age').value = age;
        modal.querySelector('#edit-gender').value = gender;
        modal.querySelector('#edit-address').value = address;
        modal.querySelector('#edit-city').value = city;
        modal.querySelector('#edit-postal_code').value = postalCode;
        modal.querySelector('#edit-status').value = status;
    });
});










// Configuration de Toastr
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};
