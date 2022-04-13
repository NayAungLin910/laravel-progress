<button id="fetch">Fetch</button>

<div id='data'></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    const f = document.getElementById('fetch');
    f.addEventListener('click', ()=>{
        const d = document.getElementById('data');
        axios.get('/data')
        .then(ans=>d.innerHTML=(ans.data.name)) 
    });
</script>