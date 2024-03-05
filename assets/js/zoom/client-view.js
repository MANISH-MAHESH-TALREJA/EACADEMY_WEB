window.addEventListener('DOMContentLoaded', function(event) {
  console.log('DOM fully loaded and parsed');
  var signature_= document.getElementById('signature').value;
  startMeeting(signature_);
});
ZoomMtg.setZoomJSLib('https://source.zoom.us/2.16.0/lib', '/av')

ZoomMtg.preLoadWasm()
ZoomMtg.prepareWebSDK()
// loads language files, also passes any error messages to the ui
ZoomMtg.i18n.load('en-US')
ZoomMtg.i18n.reload('en-US')

var authEndpoint = ''
var sdkKey = document.getElementById('SDK_key').value;
var sdk_secret = document.getElementById('SDK_secret').value;
var meetingNumber= parseInt(document.getElementById('meeting_number').value);
var userName= document.getElementById('display_name').value;
var userEmail = document.getElementById('display_email').value;
var passWord= document.getElementById('meeting_pwd').value;
var role = 1;
var registrantToken = ''
var zakToken = ''
var leaveUrl= document.getElementById('leaveurl').value;

function startMeeting(signature) {

  document.getElementById('zmmtg-root').style.display = 'block'

  ZoomMtg.init({
    leaveUrl: leaveUrl,
    success: (success) => {
      console.log(success)
      ZoomMtg.join({
        signature: signature,
        sdkKey: sdkKey,
        meetingNumber: meetingNumber,
        passWord: passWord,
        userName: userName,
        userEmail: userEmail,
        tk: registrantToken,
        zak: zakToken,
        success: (success) => {
          console.log(success)
          ZoomMtg.getAttendeeslist({});
            ZoomMtg.getCurrentUser({
              success: function (res) {
                console.log("success getCurrentUser", res.result.currentUser);
              },
            });
        },
        error: (error) => {
            console.log(error);
          alert(erro.errorMessager);
            setTimeout(() => {
             window.location.href=leaveUrl;
            }, "1000");
        },
      })
    },
    error: (error) => {
        console.log(error);
     alert(erro.errorMessager);
        setTimeout(() => {
         window.location.href=leaveUrl;
        }, "1000");
    }
  });
    ZoomMtg.inMeetingServiceListener('onUserJoin', function (data) {
      console.log('inMeetingServiceListener onUserJoin', data);
    });
  
    ZoomMtg.inMeetingServiceListener('onUserLeave', function (data) {
      console.log('inMeetingServiceListener onUserLeave', data);
    });
  
    ZoomMtg.inMeetingServiceListener('onUserIsInWaitingRoom', function (data) {
      console.log('inMeetingServiceListener onUserIsInWaitingRoom', data);
    });
  
    ZoomMtg.inMeetingServiceListener('onMeetingStatus', function (data) {
      console.log('inMeetingServiceListener onMeetingStatus', data);
    });
}


