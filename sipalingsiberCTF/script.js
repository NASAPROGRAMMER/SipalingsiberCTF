document.addEventListener('DOMContentLoaded', function() {
    const challengeBoxes = document.querySelectorAll('.challenge-box');

    challengeBoxes.forEach(box => {
        const details = box.querySelector('.challenge-details');

        // Hide all challenge details initially
        details.style.display = 'none';

        box.addEventListener('click', function(event) {
            // Toggle display of challenge details only if the click is not on an input or button
            if (!event.target.matches('input, button')) {
                if (details.style.display === 'none' || details.style.display === '') {
                    details.style.display = 'block';
                } else {
                    details.style.display = 'none';
                }
            }
        });

        // Prevent the click event from propagating to the parent box when interacting with input or button
        const inputsAndButtons = box.querySelectorAll('input, button');
        inputsAndButtons.forEach(element => {
            element.addEventListener('click', function(event) {
                event.stopPropagation();  // Prevents the box from closing
            });

            element.addEventListener('keydown', function(event) {
                event.stopPropagation();  // Ensures the box stays open when typing
            });
        });
    });
});

function submitFlag(flagId) {
    const flag = document.getElementById(flagId).value.trim();  // Remove leading/trailing spaces
    const correctFlags = {
        "flag1": "SPSCTF{Basic_Strings}",
        "flag2": "SPSCTF{Exif_Tools_Baby}",
        "flag3": "SPSCTF{Stegano_Is_Fk}",
        "flag4": "SPSCTF{i_h4t3_c43s4r}",
        "flag5": "SPSCTF{PoemIsCrazy}",
        "flag6": "SPSCTF{base64_decode_me}",
        "flag7": "SPSCTF{Journey_Church_Camridge}",
        "flag8": "SPSCTF{Lake_Sagami_Park}",
        "flag9": "SPSCTF{Chesterfield_Royal_Hospital}"
    };

    if (flag === correctFlags[flagId]) {
        showNotification('Correct flag!', 'correct');
    } else {
        showNotification('Incorrect flag, try again.', 'wrong');
    }
}

function showNotification(message, type) {
    const notificationBar = document.getElementById('notificationBar');
    notificationBar.textContent = message;
    notificationBar.className = `notification-bar ${type}`;
    notificationBar.style.display = 'block';

    // Hide the notification after 3 seconds
    setTimeout(() => {
        notificationBar.style.display = 'none';
    }, 3000);
}
