@extends('layouts.app')

@section('header-content')
<div class="banner banner1">
    <div class="inner-page-banner banner-bg">
        <div class="container">
            <div class="banner-content">
                <div class="page-path">
                    <ul>
                        <li><a class="home-page-link" href="/">Home</a></li>
                        <li><a class="current-page" href="#">My Team</a></li>
                    </ul>
                </div>
                <h1 class="banner-heading">{{ $myTeam->team_name }}</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('main-content')
<div class="container">
    <section class="p-5">
        <div class="rts-team-section inner">
            <div class="container">
                <div class="d-flex justify-content-between pb-5">
                    <div>
                        <button type="button" class="btn btn-warning">My Team</button>
                        <button type="button" class="btn btn-warning">Schedules</button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-warning"><i class="fas fa-cog"></i> Manage team</button>
                    </div>
                </div>
                <div class="team-section-inner inner">
                    <div class="row">
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="#"><img src="storage/images/players/default.png" alt=""></a>
                                    <div class="number">COACH</div>
                                </div>
                                <div class="profile">
                                    <p class="position">Head Coach</p>
                                    <a href="#" class="name text-uppercase">{{ $team->coach_name }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-5">
                            <h1 class="bg-main-orange text-white px-3 pb-1 mb-3" style="font-size: 80px; letter-spacing: -2px;">PLAYERS</h1>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addPlayerModal"><i class="fas fa-plus"></i> Add player</button>
                        </div>
                        @foreach($team->players()->get() as $player)
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="team-wraper">
                                <div class="player-card">
                                    <a class="image" href="team-details.html"><img src="storage/images/players/default.png" alt=""></a>
                                    <div class="number">{{ $player->jersey_number }}</div>
                                    <!-- <ul class="social-area">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul> -->
                                </div>
                                <div class="profile">
                                    <p class="position">
                                    @if($player->is_captain_ball)
                                        <span class="badge rounded-pill bg-warning">Captain Ball</span>
                                    @endif
                                    {{ toLongPos($player->position) }} ({{ $player->position }})</p>
                                    <a href="#" class="name text-uppercase">{{ $player->player_name }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- MODAL ADD PLAYER -->
<div class="modal fade" id="addPlayerModal" tabindex="-1" aria-labelledby="addPlayerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Player details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <!-- Upload Area -->
                            <div id="uploadArea" class="upload-area">
                                <!-- Header -->
                                <div class="upload-area__header">
                                    <h1 class="upload-area__title">Player Image</h1>
                                    <p class="upload-area__paragraph">
                                        File should be an image
                                    <strong class="upload-area__tooltip">
                                        Like
                                        <span class="upload-area__tooltip-data"></span> <!-- Data Will be Comes From Js -->
                                    </strong>
                                    </p>
                                </div>
                                <!-- End Header -->

                                <!-- Drop Zoon -->
                                <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
                                    <span class="drop-zoon__icon">
                                        <i class="fas fa-file-image"></i>
                                    </span>
                                    <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
                                    <span id="loadingText" class="drop-zoon__loading-text">Please Wait</span>
                                    <img src="" alt="Preview Image" id="previewImage" class="drop-zoon__preview-image" draggable="false">
                                    <input type="file" id="fileInput" class="drop-zoon__file-input" accept="image/*">
                                </div>
                                <!-- End Drop Zoon -->

                                <!-- File Details -->
                                <div id="fileDetails" class="upload-area__file-details file-details">
                                    <h3 class="file-details__title py-3">Uploaded File</h3>

                                    <div id="uploadedFile" class="uploaded-file">
                                    <div class="uploaded-file__icon-container">
                                        <i class="fas fa-file uploaded-file__icon"></i>
                                        <span class="uploaded-file__icon-text"></span> <!-- Data Will be Comes From Js -->
                                    </div>

                                    <div id="uploadedFileInfo" class="uploaded-file__info">
                                        <span class="uploaded-file__name">Proejct 1</span>
                                        <span class="uploaded-file__counter">0%</span>
                                    </div>
                                    </div>
                                </div>
                                <!-- End File Details -->
                            </div>
                            <!-- End Upload Area -->
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label label for="player_name">Name:</label>
                                <input class="form-control form-control-lg" type="text" name="player_name" placeholder="Type name..." required>
                            </div>
                            <div class="mb-3">
                                <label for="player_position">Position:</label>
                                <select class="form-control form-control-lg" name="player_position" required>
                                    <option value="" selected disabled>Choose position...</option>
                                    <option value="PG">PG - Point Guard</option>
                                    <option value="SG">SG - Shooting Guard</option>
                                    <option value="SF">SF - Small Forward</option>
                                    <option value="PF">PF - Power Forward</option>
                                    <option value="C">C - Center</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="player_age">Age:</label>
                                <input class="form-control form-control-lg" type="number" name="player_age" placeholder="Type age..." required>
                            </div>
                            <div class="mb-3">
                                <label for="player_jersey_number">Jersey Number:</label>
                                <input class="form-control form-control-lg" type="number" name="player_jersey_number" placeholder="Type jersey number..." min="0" max="99" oninput="validity.valid||(value='');" required/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-warning" id="addPlayer">Add player</button>
            </div>
        </div>
    </div>
</div>
<style>
    /* General Styles */
    :root {
        --clr-white: rgb(255, 255, 255);
        --clr-black: rgb(0, 0, 0);
        --clr-light: rgb(245, 248, 255);
        --clr-light-gray: rgb(196, 195, 196);
        --clr-orange: #da6a14;
        --clr-light-orange: #d8935e;
    }

    /* End General Styles */

    /* Upload Area */
    .upload-area {
        width: 100%;
        max-width: 25rem;
        background-color: var(--clr-white);
        /* box-shadow: 0 10px 60px rgb(218, 229, 255); */
        border: 2px solid var(--clr-light-orange);
        border-radius: 24px;
        padding: 2rem 1.875rem 5rem 1.875rem;
        margin: 0.625rem;
        text-align: center;
    }

    .upload-area--open { /* Slid Down Animation */
    animation: slidDown 500ms ease-in-out;
    }

    @keyframes slidDown {
    from {
        height: 28.125rem; /* 450px */
    }

    to {
        height: 35rem; /* 560px */
    }
    }

    /* Header */
    .upload-area__header {

    }

    .upload-area__title {
    font-size: 1.8rem;
    font-weight: 500;
    margin-bottom: 0.3125rem;
    }

    .upload-area__paragraph {
    font-size: 0.9375rem;
    color: var(--clr-light-gray);
    margin-top: 0;
    }

    .upload-area__tooltip {
    position: relative;
    color: var(--clr-light-orange);
    cursor: pointer;
    transition: color 300ms ease-in-out;
    }

    .upload-area__tooltip:hover {
    color: var(--clr-orange);
    }

    .upload-area__tooltip-data {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -125%);
    min-width: max-content;
    background-color: var(--clr-white);
    color: var(--clr-orange);
    border: 1px solid var(--clr-light-orange);
    padding: 0.625rem 1.25rem;
    font-weight: 500;
    opacity: 0;
    visibility: hidden;
    transition: none 300ms ease-in-out;
    transition-property: opacity, visibility;
    }

    .upload-area__tooltip:hover .upload-area__tooltip-data {
    opacity: 1;
    visibility: visible;
    }

    /* Drop Zoon */
    .upload-area__drop-zoon {
    position: relative;
    height: 11.25rem; /* 180px */
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border: 2px dashed var(--clr-light-orange);
    border-radius: 15px;
    margin-top: 2.1875rem;
    cursor: pointer;
    transition: border-color 300ms ease-in-out;
    }

    .upload-area__drop-zoon:hover {
    border-color: var(--clr-orange);
    }

    .drop-zoon__icon {
    display: flex;
    font-size: 3.75rem;
    color: var(--clr-orange);
    transition: opacity 300ms ease-in-out;
    }

    .drop-zoon__paragraph {
    font-size: 0.9375rem;
    color: var(--clr-light-gray);
    margin: 0;
    margin-top: 0.625rem;
    transition: opacity 300ms ease-in-out;
    }

    .drop-zoon:hover .drop-zoon__icon,
    .drop-zoon:hover .drop-zoon__paragraph {
    opacity: 0.7;
    }

    .drop-zoon__loading-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    color: var(--clr-light-orange);
    z-index: 10;
    }

    .drop-zoon__preview-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: contain;
    padding: 0.3125rem;
    border-radius: 10px;
    display: none;
    z-index: 1000;
    transition: opacity 300ms ease-in-out;
    }

    .drop-zoon:hover .drop-zoon__preview-image {
    opacity: 0.8;
    }

    .drop-zoon__file-input {
    display: none;
    }

    /* (drop-zoon--over) Modifier Class */
    .drop-zoon--over {
    border-color: var(--clr-orange);
    }

    .drop-zoon--over .drop-zoon__icon,
    .drop-zoon--over .drop-zoon__paragraph {
    opacity: 0.7;
    }

    /* (drop-zoon--over) Modifier Class */
    .drop-zoon--Uploaded {
    
    }

    .drop-zoon--Uploaded .drop-zoon__icon,
    .drop-zoon--Uploaded .drop-zoon__paragraph {
    display: none;
    }

    /* File Details Area */
    .upload-area__file-details {
    height: 0;
    visibility: hidden;
    opacity: 0;
    text-align: left;
    transition: none 500ms ease-in-out;
    transition-property: opacity, visibility;
    transition-delay: 500ms;
    }

    /* (duploaded-file--open) Modifier Class */
    .file-details--open {
    height: auto;
    visibility: visible;
    opacity: 1;
    }

    .file-details__title {
    font-size: 1.125rem;
    font-weight: 500;
    color: var(--clr-light-gray);
    }

    /* Uploaded File */
    .uploaded-file {
    display: flex;
    align-items: center;
    padding: 0.625rem 0;
    visibility: hidden;
    opacity: 0;
    transition: none 500ms ease-in-out;
    transition-property: visibility, opacity;
    }

    /* (duploaded-file--open) Modifier Class */
    .uploaded-file--open {
    visibility: visible;
    opacity: 1;
    }

    .uploaded-file__icon-container {
    position: relative;
    margin-right: 0.3125rem;
    }

    .uploaded-file__icon {
    font-size: 3.4375rem;
    color: var(--clr-orange);
    }

    .uploaded-file__icon-text {
    position: absolute;
    top: 1.5625rem;
    left: 50%;
    transform: translateX(-50%);
    font-size: 0.9375rem;
    font-weight: 500;
    color: var(--clr-white);
    }

    .uploaded-file__info {
    position: relative;
    top: -0.3125rem;
    width: 100%;
    display: flex;
    justify-content: space-between;
    }

    .uploaded-file__info::before,
    .uploaded-file__info::after {
    content: '';
    position: absolute;
    bottom: -0.9375rem;
    width: 0;
    height: 0.5rem;
    background-color: #ebf2ff;
    border-radius: 0.625rem;
    }

    .uploaded-file__info::before {
    width: 100%;
    }

    .uploaded-file__info::after {
    width: 100%;
    background-color: var(--clr-orange);
    }

    /* Progress Animation */
    .uploaded-file__info--active::after {
    animation: progressMove 800ms ease-in-out;
    animation-delay: 300ms;
    }

    @keyframes progressMove {
    from {
        width: 0%;
        background-color: transparent;
    }

    to {
        width: 100%;
        background-color: var(--clr-orange);
    }
    }

    .uploaded-file__name {
        width: 100%;
        max-width: 6.25rem; /* 100px */
        display: inline-block;
        font-size: 1rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .uploaded-file__counter {
    font-size: 1rem;
        olor: var(--clr-light-gray);
    }
</style>
<script>
    // Design By
    // - https://dribbble.com/shots/13992184-File-Uploader-Drag-Drop

    // Select Upload-Area
    const uploadArea = document.querySelector('#uploadArea')

    // Select Drop-Zoon Area
    const dropZoon = document.querySelector('#dropZoon');

    // Loading Text
    const loadingText = document.querySelector('#loadingText');

    // Slect File Input 
    const fileInput = document.querySelector('#fileInput');

    // Select Preview Image
    const previewImage = document.querySelector('#previewImage');

    // File-Details Area
    const fileDetails = document.querySelector('#fileDetails');

    // Uploaded File
    const uploadedFile = document.querySelector('#uploadedFile');

    // Uploaded File Info
    const uploadedFileInfo = document.querySelector('#uploadedFileInfo');

    // Uploaded File  Name
    const uploadedFileName = document.querySelector('.uploaded-file__name');

    // Uploaded File Icon
    const uploadedFileIconText = document.querySelector('.uploaded-file__icon-text');

    // Uploaded File Counter
    const uploadedFileCounter = document.querySelector('.uploaded-file__counter');

    // ToolTip Data
    const toolTipData = document.querySelector('.upload-area__tooltip-data');

    // Images Types
    const imagesTypes = [
        "jpg",
        "jpeg",
        "png"
    ];

    // Append Images Types Array Inisde Tooltip Data
    toolTipData.innerHTML = [...imagesTypes].join(', .');

    // When (drop-zoon) has (dragover) Event 
    dropZoon.addEventListener('dragover', function (event) {
    // Prevent Default Behavior 
    event.preventDefault();

    // Add Class (drop-zoon--over) On (drop-zoon)
    dropZoon.classList.add('drop-zoon--over');
    });

    // When (drop-zoon) has (dragleave) Event 
    dropZoon.addEventListener('dragleave', function (event) {
    // Remove Class (drop-zoon--over) from (drop-zoon)
    dropZoon.classList.remove('drop-zoon--over');
    });

    // When (drop-zoon) has (drop) Event 
    dropZoon.addEventListener('drop', function (event) {
    // Prevent Default Behavior 
    event.preventDefault();

    // Remove Class (drop-zoon--over) from (drop-zoon)
    dropZoon.classList.remove('drop-zoon--over');

    // Select The Dropped File
    const file = event.dataTransfer.files[0];

    // Call Function uploadFile(), And Send To Her The Dropped File :)
    uploadFile(file);
    });

    // When (drop-zoon) has (click) Event 
    dropZoon.addEventListener('click', function (event) {
    // Click The (fileInput)
    fileInput.click();
    });

    // When (fileInput) has (change) Event 
    fileInput.addEventListener('change', function (event) {
    // Select The Chosen File
    const file = event.target.files[0];

    // Call Function uploadFile(), And Send To Her The Chosen File :)
    uploadFile(file);
    });

    // Upload File Function
    function uploadFile(file) {
    // FileReader()
    const fileReader = new FileReader();
    // File Type 
    const fileType = file.type;
    // File Size 
    const fileSize = file.size;

    // If File Is Passed from the (File Validation) Function
    if (fileValidate(fileType, fileSize)) {
        // Add Class (drop-zoon--Uploaded) on (drop-zoon)
        dropZoon.classList.add('drop-zoon--Uploaded');

        // Show Loading-text
        loadingText.style.display = "block";
        // Hide Preview Image
        previewImage.style.display = 'none';

        // Remove Class (uploaded-file--open) From (uploadedFile)
        uploadedFile.classList.remove('uploaded-file--open');
        // Remove Class (uploaded-file__info--active) from (uploadedFileInfo)
        uploadedFileInfo.classList.remove('uploaded-file__info--active');

        // After File Reader Loaded 
        fileReader.addEventListener('load', function () {
        // After Half Second 
        setTimeout(function () {
            // Add Class (upload-area--open) On (uploadArea)
            uploadArea.classList.add('upload-area--open');

            // Hide Loading-text (please-wait) Element
            loadingText.style.display = "none";
            // Show Preview Image
            previewImage.style.display = 'block';

            // Add Class (file-details--open) On (fileDetails)
            fileDetails.classList.add('file-details--open');
            // Add Class (uploaded-file--open) On (uploadedFile)
            uploadedFile.classList.add('uploaded-file--open');
            // Add Class (uploaded-file__info--active) On (uploadedFileInfo)
            uploadedFileInfo.classList.add('uploaded-file__info--active');
        }, 500); // 0.5s

        // Add The (fileReader) Result Inside (previewImage) Source
        previewImage.setAttribute('src', fileReader.result);

        // Add File Name Inside Uploaded File Name
        uploadedFileName.innerHTML = file.name;

        // Call Function progressMove();
        progressMove();
        });

        // Read (file) As Data Url 
        fileReader.readAsDataURL(file);
    } else { // Else

        this; // (this) Represent The fileValidate(fileType, fileSize) Function

    };
    };

    // Progress Counter Increase Function
    function progressMove() {
    // Counter Start
    let counter = 0;

    // After 600ms 
    setTimeout(() => {
        // Every 100ms
        let counterIncrease = setInterval(() => {
        // If (counter) is equle 100 
        if (counter === 100) {
            // Stop (Counter Increase)
            clearInterval(counterIncrease);
        } else { // Else
            // plus 10 on counter
            counter = counter + 10;
            // add (counter) vlaue inisde (uploadedFileCounter)
            uploadedFileCounter.innerHTML = `${counter}%`
        }
        }, 100);
    }, 600);
    };


    // Simple File Validate Function
    function fileValidate(fileType, fileSize) {
    // File Type Validation
    let isImage = imagesTypes.filter((type) => fileType.indexOf(`image/${type}`) !== -1);

    // If The Uploaded File Type Is 'jpeg'
    if (isImage[0] === 'jpeg') {
        // Add Inisde (uploadedFileIconText) The (jpg) Value
        uploadedFileIconText.innerHTML = 'jpg';
    } else { // else
        // Add Inisde (uploadedFileIconText) The Uploaded File Type 
        uploadedFileIconText.innerHTML = isImage[0];
    };

    // If The Uploaded File Is An Image
    if (isImage.length !== 0) {
        // Check, If File Size Is 2MB or Less
        if (fileSize <= 2000000) { // 2MB :)
        return true;
        } else { // Else File Size
        return alert('Please Your File Should be 2 Megabytes or Less');
        };
    } else { // Else File Type 
        return alert('Please make sure to upload An Image File Type');
    };
    };

    document.getElementById('addPlayer').addEventListener('click', function(e) {
        e.preventDefault();

        var formData = new FormData();
        formData.append('team_id', )
    });
</script>
@endsection