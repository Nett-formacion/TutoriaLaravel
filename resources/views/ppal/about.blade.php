<x-layout.layout>

    @slot("slot_main")
        <div class=" text-4xl p-50 m-10 bg-gray-100">
            <div class="chat chat-start m-3 p-3 ml-96">
                <div class="chat-bubble chat-bubble-primary">Qué bonito es Laravel</div>
            </div>
            <div class="chat chat-end m-3 p-3 mr-96">
                <div class="chat-bubble chat-bubble-secondary">Instala</div>
            </div>
            <div class="chat chat-end m-3 p-3 mr-96">
                <div class="chat-bubble chat-bubble-accent">Crea el diseño
                </div>
            </div>
            <div class="chat chat-end m-3 p-3 mr-96">
                <div class="chat-bubble chat-bubble-info">Dale funcionalidad</div>
            </div>
            <div class="chat chat-start m-3 p-3 ml-96">
                <div class="chat-bubble chat-bubble-success"> Y lo subo al servidor</div>
            </div>
            <div class="chat chat-start m-3 p-3 ml-96">
                <div class="chat-bubble chat-bubble-warning">Aquí puedo aprender.</div>
            </div>
        </div>
    @endslot
    @slot("slot_nav")
    @endslot
</x-layout.layout>
