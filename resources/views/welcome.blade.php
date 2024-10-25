<x-layout>

    <x-navbar />

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container mt-5">
        <div class="row">

            <div class="gallery">
                <div class="gallery-item">
                    <figure>
                        <img src="https://picsum.photos/400" alt="dog" />
                        <figcaption>Picture of a few dogs having a rest and sleeping.</figcaption>
                    </figure>
                    <p>OMG, seriously how cute are these dogs?</p>
                </div>
                <div class="gallery-item">
                    <figure>
                        <img src="https://picsum.photos/401" alt="dog" />
                        <figcaption>Caption of the pic</figcaption>
                    </figure>
                    <p>More text about the image</p>
                </div>
                <div class="gallery-item">
                    <figure>
                        <img src="https://picsum.photos/402" alt="dog" />
                        <figcaption>Caption of the pic</figcaption>
                    </figure>
                    <p>More text about the image</p>
                </div>
                <div class="gallery-item">
                    <figure>
                        <img src="https://picsum.photos/403" alt="dog" />
                        <figcaption>Caption of the pic</figcaption>
                    </figure>
                    <p>More text about the image</p>
                </div>
                <div class="gallery-item">
                    <figure>
                        <img src="https://picsum.photos/404" alt="dog" />
                        <figcaption>Picture of a few dogs having a rest and sleeping.</figcaption>
                    </figure>
                    <p>OMG, seriously how cute are these dogs?</p>
                </div>
                <div class="gallery-item">
                    <figure>
                        <img src="https://picsum.photos/406" alt="dog" />
                        <figcaption>Caption of the pic</figcaption>
                    </figure>
                    <p>More text about the image</p>
                </div>
                <div class="gallery-item">
                    <figure>
                        <img src="https://picsum.photos/408" alt="dog" />
                        <figcaption>Caption of the pic</figcaption>
                    </figure>
                    <p>More text about the image</p>
                </div>
                <div class="gallery-item">
                    <figure>
                        <img src="https://picsum.photos/410" alt="dog" />
                        <figcaption>Caption of the pic</figcaption>
                    </figure>
                    <p>More text about the image</p>
                </div>
                <div class="gallery-item">
                    <figure>
                        <img src="https://picsum.photos/423" alt="dog" />
                        <figcaption>Picture of a few dogs having a rest and sleeping.</figcaption>
                    </figure>
                    <p>OMG, seriously how cute are these dogs?</p>
                </div>
                <div class="gallery-item">
                    <figure>
                        <img src="https://picsum.photos/425" alt="dog" />
                        <figcaption>Caption of the pic</figcaption>
                    </figure>
                    <p>More text about the image</p>
                </div>
                <div class="gallery-item">
                    <figure>
                        <img src="https://picsum.photos/426" alt="dog" />
                        <figcaption>Caption of the pic</figcaption>
                    </figure>
                    <p>More text about the image</p>
                </div>
                <div class="gallery-item">
                    <figure>
                        <img src="https://picsum.photos/427" alt="dog" />
                        <figcaption>Caption of the pic</figcaption>
                    </figure>
                    <p>More text about the image</p>
                </div>
                <div class="gallery-item">
                    <figure>
                        <img src="https://picsum.photos/429" alt="dog" />
                        <figcaption>Caption of the pic</figcaption>
                    </figure>
                    <p>More text about the image</p>
                </div>
                <div class="gallery-item">
                    <figure>
                        <img src="https://picsum.photos/430" alt="dog" />
                        <figcaption>Caption of the pic</figcaption>
                    </figure>
                    <p>More text about the image</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
