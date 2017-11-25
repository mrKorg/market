<!-- load combined svg file (with symbols) into body-->
<script>
    (function (doc) {
        const scripts = doc.getElementsByTagName('script');
        const script = scripts[scripts.length - 1];
        const xhr = new XMLHttpRequest();
        xhr.onload = function () {
            const div = doc.createElement('div');
            div.classList.add('sprite');
            div.style.position='absolute';
            div.style.top='-9999px';
            div.style.left='-9999px';
            div.style.width='0';
            div.style.height='0';
            div.innerHTML = this.responseText;
            script.parentNode.insertBefore(div, script)
        };
        xhr.open('get', '<?php echo HTTP ?>/assets/img/sprite.svg', true);
        xhr.send()
    })(document)
</script>