// Simple UI prompt controller
document.addEventListener('DOMContentLoaded', ()=>{
  function createPrompt(){
    // create overlay
    const overlay = document.createElement('div');
    overlay.className = 'ui-overlay';
    overlay.style.position = 'fixed';
    overlay.style.inset = '0';
    overlay.style.background = 'rgba(10,8,16,0.18)';
    overlay.style.display = 'grid';
    overlay.style.placeItems = 'center';
    overlay.style.zIndex = 9999;

    const modal = document.createElement('div');
    modal.className = 'ui-window';
    modal.style.maxWidth = '480px';
    modal.style.margin = '12px';

    const header = document.createElement('div');
    header.className = 'window-header';
    header.innerHTML = '<div class="window-controls"><span class="dot pink"></span><span class="dot lav"></span><span class="dot blue"></span></div><div style="flex:1"></div><div class="chip">Prompt</div>';

    const body = document.createElement('div');
    body.className = 'window-body';
    body.innerHTML = '<p style="font-weight:700;margin:0 0 8px">Attention!</p><p class="lead" style="margin:0 0 16px">This is an example pastel prompt. Do you want to continue?</p>';

    const actions = document.createElement('div');
    actions.style.display = 'flex';
    actions.style.gap = '10px';
    actions.style.justifyContent = 'flex-end';
    actions.innerHTML = '<button class="btn secondary" id="cancel">Cancel</button><button class="btn btn-primary" id="confirm">Confirm</button>';

    body.appendChild(actions);
    modal.appendChild(header);
    modal.appendChild(body);
    overlay.appendChild(modal);

    // click handlers
    overlay.addEventListener('click', (e)=>{ if(e.target===overlay) close(); });
    actions.querySelector('#cancel').addEventListener('click', close);
    actions.querySelector('#confirm').addEventListener('click', ()=>{ alert('Confirmed'); close(); });

    function close(){ document.body.removeChild(overlay); }

    document.body.appendChild(overlay);
  }

  const open = document.getElementById('open-prompt');
  const open2 = document.getElementById('open-prompt-2');
  if(open) open.addEventListener('click', createPrompt);
  if(open2) open2.addEventListener('click', createPrompt);
});
