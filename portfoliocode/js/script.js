const videoContainer = document.querySelector('.video-container');
const videoPlayer = videoContainer.querySelector('iframe');

// Resize the video player to match its container's aspect ratio
function resizeVideoPlayer() {
  const aspectRatio = 9 / 16; // Set the aspect ratio to 16:9
  const containerWidth = videoContainer.clientWidth;
  const playerHeight = Math.round(containerWidth * aspectRatio);
  videoPlayer.style.height = playerHeight + 'px';
}

// Call the resize function on page load and when the window is resized
window.addEventListener('DOMContentLoaded', resizeVideoPlayer);
window.addEventListener('resize', resizeVideoPlayer);
function getVideoDuration(videoId) {
    $.get(
      "https://www.googleapis.com/youtube/v3/videos", {
        part: "contentDetails",
        id: videoId,
        key: "AIzaSyAsnCyszUphxIke_2k8n6oQU_rMrYqE0Yw"
      },
      function(data) {
        var duration = moment.duration(data.items[0].contentDetails.duration).asSeconds();
        var minutes = Math.floor(duration / 60);
        var seconds = Math.floor(duration % 60);
        $(".video-duration").text(minutes + ":" + (seconds < 10 ? "0" : "") + seconds);
      }
    );
  }
  