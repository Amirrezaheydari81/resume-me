import { MetaTags } from 'react-meta-tags';
export default function SeoPage(props) {
    return (
        <>
        
        <MetaTags>
            {/* <title>امیررضا حیدری - Amirreza Heydari</title>
            <meta name="description" content="طراحی سایت و کدنویسی زندگیمه و دوست دارم تو جامعه اوپن سورس بیشتر همکاری کنم" />
            <meta property="og:title" content="امیررضا حیدری - Amirreza Heydari" />
            <meta property="og:image" content="../assets/images/svg/profile.svg" /> */}
            <title>{props.titlePage}</title>
            <meta name="description" content={props.description} />
            <meta property="og:title" content={props.titlePage} />
            {/* icon */}
            <meta property="og:image" content="../assets/images/svg/profile.svg" /> 
        </MetaTags>
        </>
    )
}