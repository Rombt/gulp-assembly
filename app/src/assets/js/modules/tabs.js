const tabs = document.querySelectorAll('.tabs');

if (tabs) {
  tabs.forEach(tab => {
    tab.addEventListener('click', e => {
      const tabName = e.target.dataset.tab;

      const tabsContainer = e.target.closest('.tabs');
      const tabsItem = tabsContainer.querySelectorAll('.tabs__body');

      tabsItem.forEach(tabItem => {
        if (tabItem.getAttribute('data-tab-name') === tabName) {
          tabItem.classList.add('active');
        } else if (tabItem.classList.contains('active')) {
          tabItem.classList.remove('active');
        }
      });
    });
  });
}
