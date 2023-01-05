import React, { Component } from 'react';
import { Slide } from 'react-slideshow-image';
import 'react-slideshow-image/dist/styles.css';
import './Slider.css'

const slideImages = [
    {
        url: '/assets/images/slider/01.jpg',
    },
    {
        url: '/assets/images/slider/02.jpg',
    },
    {
        url: '/assets/images/slider/03.jpg',
    },
];
class slider extends Component {

    state = {}
    render() {
        return (
            <div className="slide-container">
                <Slide>
                    {slideImages.map((slideImage, index) => (
                        <div className="each-slide" key={index}>
                            <div style={{ 'backgroundImage': `url(${slideImage.url})` }}>
                                <span className='sticky-bottom'>{slideImage.caption}</span>
                            </div>
                        </div>
                    ))}
                </Slide>
            </div>
        );
    }
}

export default slider;
