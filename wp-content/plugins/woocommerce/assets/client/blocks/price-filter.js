(()=>{var e,t={7813:(e,t,r)=>{"use strict";r.r(t);var n=r(9196);const o=window.wp.blocks;var i=r(3849),c=r.n(i),l=r(2911),a=r(1231);const s=window.wp.blockEditor;var u=r(5736);const m=window.wc.wcSettings;var d,p,b,w,_,g,f,h,k,E;const y=(0,m.getSetting)("wcBlocksConfig",{buildPhase:1,pluginUrl:"",productCount:0,defaultAvatar:"",restApiRoutes:{},wordCountType:"words"}),v=(y.pluginUrl,y.pluginUrl,y.buildPhase,null===(d=m.STORE_PAGES.shop)||void 0===d||d.permalink,null===(p=m.STORE_PAGES.checkout)||void 0===p||p.id,null===(b=m.STORE_PAGES.checkout)||void 0===b||b.permalink,null===(w=m.STORE_PAGES.privacy)||void 0===w||w.permalink,null===(_=m.STORE_PAGES.privacy)||void 0===_||_.title,null===(g=m.STORE_PAGES.terms)||void 0===g||g.permalink,null===(f=m.STORE_PAGES.terms)||void 0===f||f.title,null===(h=m.STORE_PAGES.cart)||void 0===h||h.id,null===(k=m.STORE_PAGES.cart)||void 0===k||k.permalink,null!==(E=m.STORE_PAGES.myaccount)&&void 0!==E&&E.permalink?m.STORE_PAGES.myaccount.permalink:(0,m.getSetting)("wpLoginUrl","/wp-login.php"),(0,m.getSetting)("localPickupEnabled",!1),(0,m.getSetting)("countries",{})),S=(0,m.getSetting)("countryData",{}),C=(Object.fromEntries(Object.keys(S).filter((e=>!0===S[e].allowBilling)).map((e=>[e,v[e]||""]))),Object.fromEntries(Object.keys(S).filter((e=>!0===S[e].allowBilling)).map((e=>[e,S[e].states||[]]))),Object.fromEntries(Object.keys(S).filter((e=>!0===S[e].allowShipping)).map((e=>[e,v[e]||""]))),Object.fromEntries(Object.keys(S).filter((e=>!0===S[e].allowShipping)).map((e=>[e,S[e].states||[]]))),Object.fromEntries(Object.keys(S).map((e=>[e,S[e].locale||[]]))),{address:["first_name","last_name","company","address_1","address_2","city","postcode","country","state","phone"],contact:["email"],additional:[]});(0,m.getSetting)("addressFieldsLocations",C).address,(0,m.getSetting)("addressFieldsLocations",C).contact,(0,m.getSetting)("addressFieldsLocations",C).additional,(0,m.getSetting)("additionalFields",{}),(0,m.getSetting)("additionalContactFields",{}),(0,m.getSetting)("additionalAddressFields",{});var x=r(4333);r(9578);const F=(0,x.withInstanceId)((({className:e,headingLevel:t,onChange:r,heading:o,instanceId:i})=>{const c=`h${t}`;return(0,n.createElement)(c,{className:e},(0,n.createElement)("label",{className:"screen-reader-text",htmlFor:`block-title-${i}`},(0,u.__)("Block title","woocommerce")),(0,n.createElement)(s.PlainText,{id:`block-title-${i}`,className:"wc-block-editor-components-title",value:o,onChange:r,style:{backgroundColor:"transparent"}}))}));var N=r(5656);const O=window.wp.components;var T=r(9307);function R(e,t){const r=(0,T.useRef)();return(0,T.useEffect)((()=>{r.current===e||t&&!t(e,r.current)||(r.current=e)}),[e,t]),r.current}const P=window.wc.wcBlocksData,A=window.wp.data;var B=r(9127),L=r.n(B);const U=(0,T.createContext)("page"),I=()=>(0,T.useContext)(U),j=(U.Provider,e=>{const t=I();e=e||t;const r=(0,A.useSelect)((t=>t(P.QUERY_STATE_STORE_KEY).getValueForQueryContext(e,void 0)),[e]),{setValueForQueryContext:n}=(0,A.useDispatch)(P.QUERY_STATE_STORE_KEY);return[r,(0,T.useCallback)((t=>{n(e,t)}),[e,n])]}),M=(e,t,r)=>{const n=I();r=r||n;const o=(0,A.useSelect)((n=>n(P.QUERY_STATE_STORE_KEY).getValueForQueryKey(r,e,t)),[r,e]),{setQueryValue:i}=(0,A.useDispatch)(P.QUERY_STATE_STORE_KEY);return[o,(0,T.useCallback)((t=>{i(r,e,t)}),[r,e,i])]};var q=r(2600);const G=e=>!(e=>null===e)(e)&&e instanceof Object&&e.constructor===Object;function W(e,t){return G(e)&&t in e}var D=r(4167);function V(e){const t=(0,T.useRef)(e);return L()(e,t.current)||(t.current=e),t.current}const Q=({queryAttribute:e,queryPrices:t,queryStock:r,queryRating:n,queryState:o,isEditor:i=!1})=>{let c=I();c=`${c}-collection-data`;const[l]=j(c),[a,s]=M("calculate_attribute_counts",[],c),[u,m]=M("calculate_price_range",null,c),[d,p]=M("calculate_stock_status_counts",null,c),[b,w]=M("calculate_rating_counts",null,c),_=V(e||{}),g=V(t),f=V(r),h=V(n);(0,T.useEffect)((()=>{"object"==typeof _&&Object.keys(_).length&&(a.find((e=>W(_,"taxonomy")&&e.taxonomy===_.taxonomy))||s([...a,_]))}),[_,a,s]),(0,T.useEffect)((()=>{u!==g&&void 0!==g&&m(g)}),[g,m,u]),(0,T.useEffect)((()=>{d!==f&&void 0!==f&&p(f)}),[f,p,d]),(0,T.useEffect)((()=>{b!==h&&void 0!==h&&w(h)}),[h,w,b]);const[k,E]=(0,T.useState)(i),[y]=(0,q.Nr)(k,200);k||E(!0);const v=(0,T.useMemo)((()=>(e=>{const t=e;return Array.isArray(e.calculate_attribute_counts)&&(t.calculate_attribute_counts=(0,D.DY)(e.calculate_attribute_counts.map((({taxonomy:e,queryType:t})=>({taxonomy:e,query_type:t})))).asc(["taxonomy","query_type"])),t})(l)),[l]);return(e=>{const{namespace:t,resourceName:r,resourceValues:n=[],query:o={},shouldSelect:i=!0}=e;if(!t||!r)throw new Error("The options object must have valid values for the namespace and the resource properties.");const c=(0,T.useRef)({results:[],isLoading:!0}),l=V(o),a=V(n),s=(()=>{const[,e]=(0,T.useState)();return(0,T.useCallback)((t=>{e((()=>{throw t}))}),[])})(),u=(0,A.useSelect)((e=>{if(!i)return null;const n=e(P.COLLECTIONS_STORE_KEY),o=[t,r,l,a],c=n.getCollectionError(...o);if(c){if(!(c instanceof Error))throw new Error("TypeError: `error` object is not an instance of Error constructor");s(c)}return{results:n.getCollection(...o),isLoading:!n.hasFinishedResolution("getCollection",o)}}),[t,r,a,l,i]);return null!==u&&(c.current=u),c.current})({namespace:"/wc/store/v1",resourceName:"products/collection-data",query:{...o,page:void 0,per_page:void 0,orderby:void 0,order:void 0,...v},shouldSelect:y})},Y=window.wc.blocksComponents;r(9434);const $=(e,t,r,n=1,o=!1)=>{let[i,c]=e;const l=e=>Number.isFinite(e);return l(i)||(i=t||0),l(c)||(c=r||n),l(t)&&t>i&&(i=t),l(r)&&r<=i&&(i=r-n),l(t)&&t>=c&&(c=t+n),l(r)&&r<c&&(c=r),!o&&i>=c&&(i=c-n),o&&c<=i&&(c=i+n),[i,c]};r(6099);const K=({className:e,isLoading:t,disabled:r,
/* translators: Submit button text for filters. */
label:o=(0,u.__)("Apply","woocommerce"),onClick:i,screenReaderLabel:l=(0,u.__)("Apply filter","woocommerce")})=>(0,n.createElement)("button",{type:"submit",className:c()("wp-block-button__link","wc-block-filter-submit-button","wc-block-components-filter-submit-button",{"is-loading":t},e),disabled:r,onClick:i},(0,n.createElement)(Y.Label,{label:o,screenReaderLabel:l})),Z=({maxConstraint:e,minorUnit:t})=>({floatValue:r})=>void 0!==r&&r<=e/10**t&&r>0,z=({minConstraint:e,currentMaxValue:t,minorUnit:r})=>({floatValue:n})=>void 0!==n&&n>=e/10**r&&n<t/10**r;r(2728);const J=({className:e,
/* translators: Reset button text for filters. */
label:t=(0,u.__)("Reset","woocommerce"),onClick:r,screenReaderLabel:o=(0,u.__)("Reset filter","woocommerce")})=>(0,n.createElement)("button",{className:c()("wc-block-components-filter-reset-button",e),onClick:r},(0,n.createElement)(Y.Label,{label:t,screenReaderLabel:o})),X=({minPrice:e,maxPrice:t,minConstraint:r,maxConstraint:o,onChange:i,step:l,currency:a,showInputFields:s=!0,showFilterButton:m=!1,inlineInput:d=!0,isLoading:p=!1,isUpdating:b=!1,isEditor:w=!1,onSubmit:_=(()=>{})})=>{const g=(0,T.useRef)(null),f=(0,T.useRef)(null),h=l||10**a.minorUnit,[k,E]=(0,T.useState)(e),[y,v]=(0,T.useState)(t),S=(0,T.useRef)(null),[C,x]=(0,T.useState)(0);(0,T.useEffect)((()=>{E(e)}),[e]),(0,T.useEffect)((()=>{v(t)}),[t]),(0,T.useLayoutEffect)((()=>{var e;d&&S.current&&x(null===(e=S.current)||void 0===e?void 0:e.offsetWidth)}),[d,x]);const F=(0,T.useMemo)((()=>isFinite(r)&&isFinite(o)),[r,o]),N=(0,T.useMemo)((()=>isFinite(e)&&isFinite(t)&&F?{"--low":(e-r)/(o-r)*100+"%","--high":(t-r)/(o-r)*100+"%"}:{"--low":"0%","--high":"100%"}),[e,t,r,o,F]),O=(0,T.useCallback)((e=>{if(p||!F||!g.current||!f.current)return;const t=e.target.getBoundingClientRect(),r=e.clientX-t.left,n=g.current.offsetWidth,i=+g.current.value,c=f.current.offsetWidth,l=+f.current.value,a=n*(i/o),s=c*(l/o);Math.abs(r-a)>Math.abs(r-s)?(g.current.style.zIndex="20",f.current.style.zIndex="21"):(g.current.style.zIndex="21",f.current.style.zIndex="20")}),[p,o,F]),R=(0,T.useCallback)((n=>{const c=n.target.classList.contains("wc-block-price-filter__range-input--min"),l=+n.target.value,a=c?[Math.round(l/h)*h,t]:[e,Math.round(l/h)*h],s=$(a,r,o,h,c);i(s)}),[i,e,t,r,o,h]),P=(0,T.useCallback)((e=>{if(e.relatedTarget&&e.relatedTarget.classList&&e.relatedTarget.classList.contains("wc-block-price-filter__amount"))return;const t=e.target.classList.contains("wc-block-price-filter__amount--min");if(k>=y){const e=$([0,y],null,null,h,t);return i([parseInt(e[0],10),parseInt(e[1],10)])}const r=$([k,y],null,null,h,t);i(r)}),[i,h,k,y]),A=(0,q.y1)(_,600),B=c()("wc-block-price-filter","wc-block-components-price-slider",s&&"wc-block-price-filter--has-input-fields",s&&"wc-block-components-price-slider--has-input-fields",m&&"wc-block-price-filter--has-filter-button",m&&"wc-block-components-price-slider--has-filter-button",!F&&"is-disabled",(d||C<=300)&&"wc-block-components-price-slider--is-input-inline"),L=G(g.current)?g.current.ownerDocument.activeElement:void 0,U=L&&L===g.current?h:1,I=L&&L===f.current?h:1,j=String(k/10**a.minorUnit),M=String(y/10**a.minorUnit),W=d&&C>300,D=(0,n.createElement)("div",{className:c()("wc-block-price-filter__range-input-wrapper","wc-block-components-price-slider__range-input-wrapper",{"is-loading":p&&b}),onMouseMove:O,onFocus:O},F&&(0,n.createElement)("div",{"aria-hidden":s},(0,n.createElement)("div",{className:"wc-block-price-filter__range-input-progress wc-block-components-price-slider__range-input-progress",style:N}),(0,n.createElement)("input",{type:"range",className:"wc-block-price-filter__range-input wc-block-price-filter__range-input--min wc-block-components-price-slider__range-input wc-block-components-price-slider__range-input--min","aria-label":(0,u.__)("Filter products by minimum price","woocommerce"),"aria-valuetext":j,value:Number.isFinite(e)?e:r,onChange:R,step:U,min:r,max:o,ref:g,disabled:p&&!F,tabIndex:s?-1:0}),(0,n.createElement)("input",{type:"range",className:"wc-block-price-filter__range-input wc-block-price-filter__range-input--max wc-block-components-price-slider__range-input wc-block-components-price-slider__range-input--max","aria-label":(0,u.__)("Filter products by maximum price","woocommerce"),"aria-valuetext":M,value:Number.isFinite(t)?t:o,onChange:R,step:I,min:r,max:o,ref:f,disabled:p,tabIndex:s?-1:0}))),V=e=>`wc-block-price-filter__amount wc-block-price-filter__amount--${e} wc-block-form-text-input wc-block-components-price-slider__amount wc-block-components-price-slider__amount--${e}`,Q={currency:a,decimalScale:0},X={...Q,displayType:"input",allowNegative:!1,disabled:p||!F,onBlur:P};return(0,n.createElement)("div",{className:B,ref:S},(!W||!s)&&D,s&&(0,n.createElement)("div",{className:"wc-block-price-filter__controls wc-block-components-price-slider__controls"},b?(0,n.createElement)("div",{className:"input-loading"}):(0,n.createElement)(Y.FormattedMonetaryAmount,{...X,className:V("min"),"aria-label":(0,u.__)("Filter products by minimum price","woocommerce"),isAllowed:z({minConstraint:r,minorUnit:a.minorUnit,currentMaxValue:y}),onValueChange:e=>{e!==k&&E(e)},value:k}),W&&D,b?(0,n.createElement)("div",{className:"input-loading"}):(0,n.createElement)(Y.FormattedMonetaryAmount,{...X,className:V("max"),"aria-label":(0,u.__)("Filter products by maximum price","woocommerce"),isAllowed:Z({maxConstraint:o,minorUnit:a.minorUnit}),onValueChange:e=>{e!==y&&v(e)},value:y})),!s&&!b&&Number.isFinite(e)&&Number.isFinite(t)&&(0,n.createElement)("div",{className:"wc-block-price-filter__range-text wc-block-components-price-slider__range-text"},(0,n.createElement)(Y.FormattedMonetaryAmount,{...Q,value:e}),(0,n.createElement)(Y.FormattedMonetaryAmount,{...Q,value:t})),(0,n.createElement)("div",{className:"wc-block-components-price-slider__actions"},(w||!b&&(e!==r||t!==o))&&(0,n.createElement)(J,{onClick:()=>{i([r,o]),A()},screenReaderLabel:(0,u.__)("Reset price filter","woocommerce")}),m&&(0,n.createElement)(K,{className:"wc-block-price-filter__button wc-block-components-price-slider__button",isLoading:b,disabled:p||!F,onClick:_,screenReaderLabel:(0,u.__)("Apply price filter","woocommerce")})))};r(1753);const H=({children:e})=>(0,n.createElement)("div",{className:"wc-block-filter-title-placeholder"},e),ee=window.wc.priceFormat,te=window.wp.url,re=e=>"boolean"==typeof e,ne=(0,m.getSettingWithCoercion)("isRenderingPhpTemplate",!1,re);function oe(e){return window?(0,te.getQueryArg)(window.location.href,e):null}function ie(e){ne?((e=e.replace(/(?:query-(?:\d+-)?page=(\d+))|(?:page\/(\d+))/g,"")).endsWith("?")&&(e=e.slice(0,-1)),window.location.href=e):window.history.replaceState({},"",e)}const ce=e=>"string"==typeof e,le="ROUND_UP",ae="ROUND_DOWN",se=(e,t,r)=>{const n=10*10**t;let o=null;const i=parseFloat(e);isNaN(i)||(r===le?o=Math.ceil(i/n)*n:r===ae&&(o=Math.floor(i/n)*n));const c=R(o,Number.isFinite);return Number.isFinite(o)?o:c};r(9432);const ue=(0,T.createContext)({});function me(e,t){return Number(e)*10**t}const de=({attributes:e,isEditor:t=!1})=>{const r=(()=>{const{wrapper:e}=(0,T.useContext)(ue);return t=>{e&&e.current&&(e.current.hidden=!t)}})(),o=(0,m.getSettingWithCoercion)("hasFilterableProducts",!1,re),i=(0,m.getSettingWithCoercion)("isRenderingPhpTemplate",!1,re),[c,l]=(0,T.useState)(!1),a=oe("min_price"),s=oe("max_price"),[u]=j(),{results:d,isLoading:p}=Q({queryPrices:!0,queryState:u,isEditor:t}),b=(0,ee.getCurrencyFromPriceResponse)(W(d,"price_range")?d.price_range:void 0),[w,_]=M("min_price"),[g,f]=M("max_price"),[h,k]=(0,T.useState)(me(a,b.minorUnit)||null),[E,y]=(0,T.useState)(me(s,b.minorUnit)||null),{minConstraint:v,maxConstraint:S}=(({minPrice:e,maxPrice:t,minorUnit:r})=>({minConstraint:se(e||"",r,ae),maxConstraint:se(t||"",r,le)}))({minPrice:W(d,"price_range")&&W(d.price_range,"min_price")&&ce(d.price_range.min_price)?d.price_range.min_price:void 0,maxPrice:W(d,"price_range")&&W(d.price_range,"max_price")&&ce(d.price_range.max_price)?d.price_range.max_price:void 0,minorUnit:b.minorUnit});(0,T.useEffect)((()=>{c||(_(me(a,b.minorUnit)),f(me(s,b.minorUnit)),l(!0))}),[b.minorUnit,c,s,a,f,_]);const[C,x]=(0,T.useState)(p),F=(0,T.useCallback)(((e,t)=>{const r=t>=Number(S)?void 0:t,n=e<=Number(v)?void 0:e;if(window){const e=function(e,t){const r={};for(const[e,n]of Object.entries(t))n?r[e]=n.toString():delete r[e];const n=(0,te.removeQueryArgs)(e,...Object.keys(t));return(0,te.addQueryArgs)(n,r)}(window.location.href,{min_price:n/10**b.minorUnit,max_price:r/10**b.minorUnit});window.location.href!==e&&ie(e)}_(n),f(r)}),[v,S,_,f,b.minorUnit]),N=(0,q.y1)(F,500),O=(0,T.useCallback)((t=>{x(!0),t[0]!==h&&k(t[0]),t[1]!==E&&y(t[1]),i&&c&&!e.showFilterButton&&N(t[0],t[1])}),[h,E,k,y,i,c,N,e.showFilterButton]);(0,T.useEffect)((()=>{e.showFilterButton||i||N(h,E)}),[h,E,e.showFilterButton,N,i]);const P=R(w),A=R(g),B=R(v),L=R(S);if((0,T.useEffect)((()=>{(!Number.isFinite(h)||w!==P&&w!==h||v!==B&&v!==h)&&k(Number.isFinite(w)?w:v),(!Number.isFinite(E)||g!==A&&g!==E||S!==L&&S!==E)&&y(Number.isFinite(g)?g:S)}),[h,E,w,g,v,S,B,L,P,A]),!o)return r(!1),null;if(!p&&(null===v||null===S||v===S))return r(!1),null;const U=`h${e.headingLevel}`;r(!0),!p&&C&&x(!1);const I=(0,n.createElement)(U,{className:"wc-block-price-filter__title"},e.heading),G=p&&C?(0,n.createElement)(H,null,I):I;return(0,n.createElement)(n.Fragment,null,!t&&e.heading&&G,(0,n.createElement)("div",{className:"wc-block-price-slider"},(0,n.createElement)(X,{minConstraint:v,maxConstraint:S,minPrice:h,maxPrice:E,currency:b,showInputFields:e.showInputFields,inlineInput:e.inlineInput,showFilterButton:e.showFilterButton,onChange:O,onSubmit:()=>F(h,E),isLoading:p,isUpdating:C,isEditor:t})))};r(2217);const pe=({clientId:e,setAttributes:t,filterType:r,attributes:i})=>{const{replaceBlock:c}=(0,A.useDispatch)("core/block-editor"),{heading:l,headingLevel:a}=i;if((0,A.useSelect)((t=>{const{getBlockParentsByBlockName:r}=t("core/block-editor");return r(e,"woocommerce/filter-wrapper").length>0}),[e])||!r)return null;const m=[(0,n.createElement)(O.Button,{key:"convert",onClick:()=>{const n=[(0,o.createBlock)(`woocommerce/${r}`,{...i,heading:""})];l&&""!==l&&n.unshift((0,o.createBlock)("core/heading",{content:l,level:null!=a?a:2})),c(e,(0,o.createBlock)("woocommerce/filter-wrapper",{heading:l,filterType:r},[...n])),t({heading:"",lock:{remove:!0}})},variant:"primary"},(0,u.__)("Upgrade block","woocommerce"))];return(0,n.createElement)(s.Warning,{actions:m},(0,u.__)("Filter block: We have improved this block to make styling easier. Upgrade it using the button below.","woocommerce"))},be=JSON.parse('{"name":"woocommerce/price-filter","version":"1.0.0","title":"Filter by Price Controls","description":"Enable customers to filter the product grid by choosing a price range.","category":"woocommerce","keywords":["WooCommerce"],"supports":{"html":false,"multiple":false,"color":{"text":true,"background":false},"inserter":false,"lock":false},"attributes":{"className":{"type":"string","default":""},"showInputFields":{"type":"boolean","default":true},"inlineInput":{"type":"boolean","default":false},"showFilterButton":{"type":"boolean","default":false},"headingLevel":{"type":"number","default":3}},"textdomain":"woocommerce","apiVersion":2,"$schema":"https://schemas.wp.org/trunk/block.json"}'),we={heading:{type:"string",default:(0,u.__)("Filter by price","woocommerce")}},_e=[{attributes:{...be.attributes,...we},save:({attributes:e})=>{const{className:t,showInputFields:r,showFilterButton:o,heading:i,headingLevel:l}=e,a={"data-showinputfields":r,"data-showfilterbutton":o,"data-heading":i,"data-heading-level":l};return(0,n.createElement)("div",{...s.useBlockProps.save({className:c()("is-loading",t)}),...a},(0,n.createElement)("span",{"aria-hidden":!0,className:"wc-block-product-categories__placeholder"}))}}];(0,o.registerBlockType)(be,{icon:{src:(0,n.createElement)(l.Z,{icon:a.Z,className:"wc-block-editor-components-block-icon"})},attributes:{...be.attributes,...we},edit:function({attributes:e,setAttributes:t,clientId:r}){const{heading:o,headingLevel:i,showInputFields:c,inlineInput:d,showFilterButton:p}=e,b=(0,s.useBlockProps)();return(0,n.createElement)("div",{...b},0===y.productCount?(0,n.createElement)(O.Placeholder,{className:"wc-block-price-slider",icon:(0,n.createElement)(l.Z,{icon:a.Z}),label:(0,u.__)("Filter by Price","woocommerce"),instructions:(0,u.__)("Display a slider to filter products in your store by price.","woocommerce")},(0,n.createElement)("p",null,(0,u.__)("To filter your products by price you first need to assign prices to your products.","woocommerce")),(0,n.createElement)(O.Button,{className:"wc-block-price-slider__add-product-button",variant:"secondary",href:(0,m.getAdminLink)("post-new.php?post_type=product"),target:"_top"},(0,u.__)("Add new product","woocommerce")+" ",(0,n.createElement)(l.Z,{icon:N.Z})),(0,n.createElement)(O.Button,{className:"wc-block-price-slider__read_more_button",variant:"tertiary",href:"https://woo.com/document/managing-products/",target:"_blank"},(0,u.__)("Learn more","woocommerce"))):(0,n.createElement)(n.Fragment,null,(0,n.createElement)(s.InspectorControls,{key:"inspector"},(0,n.createElement)(O.PanelBody,{title:(0,u.__)("Settings","woocommerce")},(0,n.createElement)(O.__experimentalToggleGroupControl,{label:(0,u.__)("Price Range Selector","woocommerce"),value:c?"editable":"text",onChange:e=>t({showInputFields:"editable"===e}),className:"wc-block-price-filter__price-range-toggle"},(0,n.createElement)(O.__experimentalToggleGroupControlOption,{value:"editable",label:(0,u.__)("Editable","woocommerce")}),(0,n.createElement)(O.__experimentalToggleGroupControlOption,{value:"text",label:(0,u.__)("Text","woocommerce")})),c&&(0,n.createElement)(O.ToggleControl,{label:(0,u.__)("Inline input fields","woocommerce"),checked:d,onChange:()=>t({inlineInput:!d}),help:(0,u.__)("Show input fields inline with the slider.","woocommerce")}),(0,n.createElement)(O.ToggleControl,{label:(0,u.__)("Show 'Apply filters' button","woocommerce"),help:(0,u.__)("Products will update when the button is clicked.","woocommerce"),checked:p,onChange:()=>t({showFilterButton:!p})}))),(0,n.createElement)(pe,{attributes:e,clientId:r,setAttributes:t,filterType:"price-filter"}),o&&(0,n.createElement)(F,{className:"wc-block-price-filter__title",headingLevel:i,heading:o,onChange:e=>t({heading:e})}),(0,n.createElement)(O.Disabled,null,(0,n.createElement)(de,{attributes:e,isEditor:!0}))))},save({attributes:e}){const{className:t}=e;return(0,n.createElement)("div",{...s.useBlockProps.save({className:c()("is-loading",t)})},(0,n.createElement)("span",{"aria-hidden":!0,className:"wc-block-product-categories__placeholder"}))},deprecated:_e})},1753:()=>{},2728:()=>{},6099:()=>{},9434:()=>{},2217:()=>{},9432:()=>{},9578:()=>{},9196:e=>{"use strict";e.exports=window.React},4333:e=>{"use strict";e.exports=window.wp.compose},9307:e=>{"use strict";e.exports=window.wp.element},5736:e=>{"use strict";e.exports=window.wp.i18n},9127:e=>{"use strict";e.exports=window.wp.isShallowEqual},444:e=>{"use strict";e.exports=window.wp.primitives}},r={};function n(e){var o=r[e];if(void 0!==o)return o.exports;var i=r[e]={exports:{}};return t[e].call(i.exports,i,i.exports,n),i.exports}n.m=t,e=[],n.O=(t,r,o,i)=>{if(!r){var c=1/0;for(u=0;u<e.length;u++){for(var[r,o,i]=e[u],l=!0,a=0;a<r.length;a++)(!1&i||c>=i)&&Object.keys(n.O).every((e=>n.O[e](r[a])))?r.splice(a--,1):(l=!1,i<c&&(c=i));if(l){e.splice(u--,1);var s=o();void 0!==s&&(t=s)}}return t}i=i||0;for(var u=e.length;u>0&&e[u-1][2]>i;u--)e[u]=e[u-1];e[u]=[r,o,i]},n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),n.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.j=9750,(()=>{var e={9750:0};n.O.j=t=>0===e[t];var t=(t,r)=>{var o,i,[c,l,a]=r,s=0;if(c.some((t=>0!==e[t]))){for(o in l)n.o(l,o)&&(n.m[o]=l[o]);if(a)var u=a(n)}for(t&&t(r);s<c.length;s++)i=c[s],n.o(e,i)&&e[i]&&e[i][0](),e[i]=0;return n.O(u)},r=self.webpackChunkwebpackWcBlocksJsonp=self.webpackChunkwebpackWcBlocksJsonp||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})();var o=n.O(void 0,[2869],(()=>n(7813)));o=n.O(o),((this.wc=this.wc||{}).blocks=this.wc.blocks||{})["price-filter"]=o})();