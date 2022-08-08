import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Choices from 'choices.css';

// Create multi-select element

window.choices = (element) => {
    return new Choices(element, {
        maxItemCount: 4, removeItemButton: true
    });
}
