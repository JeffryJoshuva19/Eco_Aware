const container = document.querySelector('.container');

function addNewsFeed(title, content) {
  const newsFeed = document.createElement('div');
  newsFeed.classList.add('news-feed');
  
  const titleElement = document.createElement('h2');
  titleElement.textContent = title;
  
  const contentElement = document.createElement('p');
  contentElement.textContent = content;
  
  newsFeed.appendChild(titleElement);
  newsFeed.appendChild(contentElement);
  container.appendChild(newsFeed);
}
