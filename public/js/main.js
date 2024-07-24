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
        }
    });
    $('.wizard > .steps li a').click(function () {
        $(this).parent().addClass('checked');
        $(this).parent().prevAll().addClass('checked');
        $(this).parent().nextAll().removeClass('checked');
    });
    // Custome Jquery Step Button
    $('.forward').click(function () {
        $("#wizard").steps('next');
    })
    $('.backward').click(function () {
        $("#wizard").steps('previous');
    })
    // Select Dropdown
    $('html').click(function () {
        $('.select .dropdown').hide();
    });
    $('.select').click(function (event) {
        event.stopPropagation();
    });
    $('.select .select-control').click(function () {
        $(this).parent().next().toggle();
    })
    $('.select .dropdown li').click(function () {
        $(this).parent().toggle();
        var text = $(this).attr('rel');
        $(this).parent().prev().find('div').text(text);
    })
})

function hideImagesOnMobile() {
    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    if (width <= 768) { // Si la largeur de l'écran est inférieure ou égale à 768 pixels
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

// Cacher les images au chargement de la page
hideImagesOnMobile();

// Cacher les images lors du redimensionnement de la fenêtre
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

// Assurez-vous que le DOM est complètement chargé avant d'exécuter le code
document.addEventListener('DOMContentLoaded', function () {
    const fileInput = document.getElementById('fileInput');
    const uploadText = document.getElementById('uploadText');

    // Vérifiez que les éléments existent avant de les utiliser
    if (fileInput && uploadText) {
        fileInput.addEventListener('change', function (event) {
            const files = event.target.files;
            if (files.length > 0) {
                // Concaténer les noms des fichiers choisis
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
