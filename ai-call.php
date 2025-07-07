<?php
// Floating AI Agent Call Button Component
?>
<div id="ai-agent-call-btn" title="Talk to our AI Agent">
  <i class="bi bi-robot"></i>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var aiBtn = document.getElementById('ai-agent-call-btn');
    if (aiBtn) {
      aiBtn.addEventListener('click', function() {
        window.location.href = 'https://react-ai-agent-tbw.vercel.app';
      });
    }
  });
</script> 