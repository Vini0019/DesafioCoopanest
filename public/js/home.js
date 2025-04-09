document.addEventListener('DOMContentLoaded', function() {

    const deleteForms = document.querySelectorAll('.form-delete');

    deleteForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); 

            const userId = this.getAttribute('data-id');

            Swal.fire({
                title: 'Tem certeza?',
                text: "Esta ação não pode ser desfeita!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#007a3f',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, excluir!',
                cancelButtonText: 'Cancelar',
                background: '#ffffff',
                allowOutsideClick: false
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    });

    // criando efeito de reveal
    window.revelar = ScrollReveal({reset:true});

    revelar.reveal('.tabela-funcionarios', {
        duration: 1000,
        delay: 200
    });

    revelar.reveal('.efeito-txt-topo',{
        duration: 2000,
        distance: '90px'
    })

    revelar.reveal('.efeito-img-topo-1',{
        duration: 2000,
        distance: '90px',
        delay: 500
    })

    revelar.reveal('.efeito-img-topo-2',{
        duration: 2000,
        distance: '90px',
        delay: 700

    })

    revelar.reveal('.efeito-img-topo-3',{
        duration: 2000,
        distance: '90px',
        delay: 900

    })
});