let obj = {
    frames : document.querySelectorAll('.frame'),
    tabs   : document.querySelectorAll('.tab'),
    video_block : document.querySelectorAll('.background-video'),
    video_play  : document.querySelectorAll('.video-play'),
    active_tab : '',
    index     : null,
    initialX  : null,
    initialY  :null
};

//-----------------------------------------------
function find_index(arr, frame) {

    for (let i = 0; i < arr.length; i++){
        if(arr[i] === frame){
            return i;
        }
    }
}
//------------- next slade-------------------------

function next_frame(frame) {
        if(frame.classList.contains('active')){
            if(frame.nextElementSibling){
                let next = frame.nextElementSibling,
                    frame_video = frame.querySelector('.background-video'),
                    control_button = frame.querySelector('.video-play'),
                    isVideo = false;

                if(frame_video){
                    video_pause(frame_video, control_button);
                }
                if(next.querySelector('.background-video')){
                    currentTime_begin(next.querySelector('.background-video'));
                    isVideo = true;
                }
                frame.classList.remove('active');
                frame.style.display = 'none';
                next.classList.add('active');
                next.style.display = '';
                move(next, isVideo);
            }

        }
}

//--------- previous slide --------------------

function previous_frame(frame) {
        if(frame.classList.contains('active')){
            if(frame.previousElementSibling){
                let previous = frame.previousElementSibling,
                    frame_video = frame.querySelector('.background-video'),
                    control_button = frame.querySelector('.video-play'),
                    isVideo = false;

                if(frame_video){
                    video_pause(frame_video, control_button);
                }

                if(previous.querySelector('.background-video')){
                    currentTime_begin(previous.querySelector('.background-video'));
                    isVideo = true;
                }
                frame.classList.remove('active');
                frame.style.display = 'none';
                previous.classList.add('active');
                previous.style.display = '';
                move(previous, isVideo);
            }
        }
}
//--------- duration video -------------------
function duration_video(video) {

   return Math.floor(10 * video.duration); // will return the full length of the movie
}
//--------- currentTime video -------------------
function currentTime_video(video) {

    return Math.floor(10 * video.currentTime); // will return the full length of the movie
}
//--------- currentTime begin -------------------
function currentTime_begin(video) {

    video.currentTime = 0;
}
//-------- video pause --------------------
function video_pause(video, control_button) {
   if(video.played){
       video.pause();
       control_button.style.display = 'block';
   }
}
//-------- video play ----------------------

function play_video(video, control_button, frame, tab){
    let tab_width = tab.style.width,
        width = parseInt(tab_width.replace(/[^\d]/g, '')) || 1,
        interval = undefined,
        duration = duration_video(video),
        _tab = tab;
        video.muted = false;

    if (video.paused) {
        video.play();
        control_button.style.display = "none";
        interval = setInterval( _frame, duration);

        function _frame() {
            let currentTime = currentTime_video(video);
            if (width >= 100 || currentTime >= duration) {
                video.pause();
                clearInterval(interval);
                _tab.classList.add('white');
                next_frame(frame);
            } else {
                if(video.paused){
                    clearInterval(interval);
                }else {
                    width++;
                    _tab.style.width = width + "%";
                }
            }
        }

    } else {
        video.pause();
        control_button.style.display = "block";
        clearInterval(interval);
    }

}

//---------- find tab -------------------------

function find_tab(frame) {
    let arr_frames = obj.frames,
        arr_tabs = frame.querySelectorAll('.tab'),
        index = find_index(arr_frames, frame);

    return arr_tabs[index];
}

// ------------progress bar --------------------

function move(frame, isVideo = false) {

   if(!isVideo) {
       remove_class_from_tab(frame);
       let dur = 40,
           tab = find_tab(frame),
           i = 0;

       if (i === 0) {
           i = 1;
           let elem = tab.querySelector(".active"),
               width = 1,
               interval = setInterval(_frame, dur);

           function _frame() {
               if (width >= 100) {
                   clearInterval(interval);
                   elem.classList.add('white');
                   next_frame(frame);
                   i = 0;
               } else {
                   width++;
                   elem.style.width = width + "%";

               }
           }
       }
   }
}

//---------------------------------------------

// слушаем событие resize
window.addEventListener('resize', () => {
    // получаем текущее значение высоты
    // let vh = window.innerHeight ? window.innerHeight * 0.01 : $(window).height() * 0.01;
    let vh = window.innerHeight * 0.01 || document.documentElement.clientHeight * 0.01 || $(window).height() * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
});


//------------- Swipe Up / Down / Left / Right---------
function startTouch(e) {
    obj.initialX = e.touches[0].clientX;
    obj.initialY = e.touches[0].clientY;
}
function moveTouch(e) {

    if (obj.initialX === null) {
        return;
    }

    if (obj.initialY === null) {
        return;
    }

    let currentX = e.touches[0].clientX,
        currentY = e.touches[0].clientY;

    let diffX = obj.initialX - currentX,
        diffY = obj.initialY - currentY;



    if (Math.abs(diffX) > Math.abs(diffY)) {
        // sliding horizontally
        if (diffX > 0) {
            // swiped left
            next_frame();
        } else {
            // swiped right
            previous_frame();
        }
    } else {
        // sliding vertically
        if (diffY > 0) {
            // swiped up
        } else {
            // swiped down
          }
    }

    obj.initialX = null;
    obj.initialY = null;
}
//------------------------------------------------------
function remove_class_from_tab(el) {
    let current_tab = find_tab(el),
        current_active_tab = current_tab.querySelector('.active');
        current_active_tab.style.width = 0;
        current_active_tab.clientWidth = 0;
        current_active_tab.classList.remove('white');
}

//------------------------------------------------------
function startListener(){
    document.ontouchstart = startTouch;
    // document.ontouchmove = moveTouch;
}


$(document).ready(function(){

    obj.frames.forEach(el=>{
        el.style.display = 'none';
        if(el.id === 'frame_5'){
            if(!el.querySelector('#el_172219')){
                el.querySelector('#el_172218').style.top = '70%';
            }
        }
        el.addEventListener('click', () =>{
            if(obj.initialX >= (document.documentElement.clientWidth / 3) * 2 ){

                   remove_class_from_tab(el);

                let next_tabs = find_tab(el.nextElementSibling),
                    active_tab = next_tabs.querySelector(".active");
                    active_tab.classList.remove('white');
                    next_frame(el);
            }else if(obj.initialX <= (document.documentElement.clientWidth / 3) ){

                   remove_class_from_tab(el);

                let previous_tabs = find_tab(el.previousElementSibling),
                    active_tab = previous_tabs.querySelector(".active");
                    active_tab.classList.remove('white');
                    previous_frame(el);
            }
        })

        if(el.querySelector('.background-video')){
            let video = el.querySelector('.background-video'),
                control_box = el.querySelector('.video_control_box'),
                control_button = control_box.querySelector('.video-play'),
                tab = find_tab(el),
                active_tab = tab.querySelector(".active");

                video_pause(video, control_button);

            control_box.addEventListener('click', (e)=>{
                play_video(video, control_button, el, active_tab);
            });
         }
    });
    obj.frames[0].style.display = '';
    move(obj.frames[0]);


    let vh = window.innerHeight * 0.01 || document.documentElement.clientHeight * 0.01 || $(window).height() * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    startListener();
});
$(":input").inputmask();
$("#phone").inputmask("+38 (999) 999-99-99");