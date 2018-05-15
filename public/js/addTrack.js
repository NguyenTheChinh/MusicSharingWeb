function addTrackToPl(trackId){
        let trackFiled = document.getElementsByClassName("trackid");
        for(let i=0; i<trackFiled.length;i++){
            trackFiled[i].value = trackId;
        }
    }