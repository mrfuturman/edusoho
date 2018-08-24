export default class Finish {
  constructor() {
    this.initEvent();
  }

  initEvent() {
    window.ltc.on('getFinishCondition', function(msg){
      window.ltc.emit('returnFinishCondition', {valid:true,data:window.ltc.getFormSerializeObject($('#step3-form'))});
    });
  }
}