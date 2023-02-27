<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <livewire:counter/>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                 <livewire:article-form />
            </div>
        </div>
    </div>


    {{-- <script>
        window.addEventListener('DOMContentLoaded', ()=>{
            let btn = document.querySelector('#increment');
            let counterValue = document.querySelector('#counter').innerHTML;
            console.log(counterValue);
            btn.addEventListener('click', ()=>{
                let counterelement = document.querySelector('#counter')
                counterelement.innerHTML = counterValue++;
            })
        })
    </script> --}}


</x-layout>