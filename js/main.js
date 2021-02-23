'use strict'
let hamburger_button
let hamburger_links = 0

window.addEventListener('load', () => {
    if (document.getElementById('navigation-mobile-hamburger')) {
        hamburger_button = document.getElementById('navigation-mobile-hamburger')

        if (document.getElementById('navigation-mobile-links')) {
            hamburger_links = document.getElementById('navigation-mobile-links')

            hamburger_button.addEventListener('click', () => {
                console.log(hamburger_button)

                /* Simply using getPropertyValue does not work in Firefox */
                console.log(window.getComputedStyle(hamburger_links).getPropertyValue('display'))
                let displayValue = window.getComputedStyle(hamburger_links).getPropertyValue('display')
                console.log(typeof displayValue)
                console.log(displayValue.localeCompare('none'))
                if (displayValue != 'none') {
                    hamburger_links.style.display = 'none';
                    console.log('test2')
                } else {
                    hamburger_links.style.setProperty('display', 'block');
                    console.log('tes3')
                }
                console.log('test4')
            })
        }
        else {
            hamburger_button.addEventListener('click', () => {
                console.log('Links not found in root files')
            })
        }
    }
})