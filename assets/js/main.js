import { setupSearchForm } from './search.js';
import { setupSmoothScrolling } from './smooth-scroll.js';
import { setupJobCardActions } from './job-card.js';
import { setupCategoryClicks } from './category-click.js';
import { setupHeaderScrollEffect } from './scroll-effect.js';

document.addEventListener('DOMContentLoaded', () => {
  console.log('DOM loaded, initializing components...');
  
  try {
    setupSearchForm();
    setupSmoothScrolling();
    setupJobCardActions();
    setupCategoryClicks();
    setupHeaderScrollEffect();
    console.log('All components initialized successfully');
  } catch (error) {
    console.error('Error initializing components:', error);
  }
});